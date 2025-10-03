<?php
namespace App\Controllers;
class ManageEducation extends BaseController{
    public function index()
    {
        return view('ManageEducation/level');
    }
    public function degree()
    {
        return view('ManageEducation/Degree');
    }
    public function group()
    {
       return view('ManageEducation');
    }
}