<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class  login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $request = service('request');

        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $recaptchaResponse = $request->getPost('g-recaptcha-response');

        // 1. Validate reCAPTCHA
        if (empty($recaptchaResponse)) {
            return redirect()->back()->withInput()->with('error', 'Captcha is required');
        }

        $secretKey = 'YOUR_SECRET_KEY'; // <-- Replace with your actual secret key
        $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}");
        $responseData = json_decode($verifyResponse);

      

        // 2. Check hardcoded credentials
        if ($username === 'admin' && $password === 'admin') {
            $session->set([
                'admin_username' => 'admin',
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
