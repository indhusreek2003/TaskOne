<?php
namespace App\Controllers;
class ManageJobs extends BaseController
{
    public function index()
    {
        return view('ManageJobs/AllJobs');
    }
   
    public function pendingjobs()
    {
        return veiw('ManageJobs/PendingJobs');
    }
    public function approvedjobs()
    {
        return veiw('ManageJobs/Approved Jobs');
    }
    public function expiredjobs()
    {
        return veiw('ManageJobs/Expired Jobs');
    }
    public function rejectedjobs()
    {
        return veiw ('ManageJobs/Rejected Jobs');
    }


}