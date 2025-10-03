<?php
namespace App\Controllers;
class ManageLocation extends controller{
    public function index()
    {
        return view('ManageLocation/city');
    }
    public function location()
    {
        return view('ManageLocation/Location');
    }
    
    
}