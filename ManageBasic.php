<?php
namespace App\Controllers;
class ManageBasic extends BaseController{
    public function index()
    {
    return view('ManageBasic/skill');
    }
    public function Experience()
    {
        return view('ManageBasic/Experience');
    }
    public function type()
    {
        return view('ManageBasic/Type');
    }
    public function shift()
    {
        return view('ManageBasic/Shift');
    }
    public function salaryperiod()
    {
        return view('ManageBasic/SalaryPeriod');
    }
    public function numberofemployees()
    {
        return view('ManageBasic/NumberOfEmployees');
    }
}