<?php
namespace App\Controllers;
class Extra  extends BaseController{
    public function index()
    {
        return view('Extra/Application');
    }
    public function server()
    {
        return view('Extra/Server');
    }
    public function cache()
    {
        return view('Extra/Cache');
    }
    public function update()
    {
        return view('Extra/Update');
    }
}