<?php
namespace App\Controllers;
class report extends BaseController{
    public function index()
    {
        return view('Report/TranscationHistory');
    }
    public function loginhistory()
    {
        return view('Report/LoginHistory');
    }
    public function notificationhistory()
    {
        return view('Report/NotificationHistory');
    }
}