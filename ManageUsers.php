<?php
namespace App\Conntroller;
class ManageUsers extends BaseController{
    public function index()
    {
       return view('ManageUsers/ActiveUsers');
    }
    
     public function bannedusers()
     {
        return view('ManageUser/BannedUsers');
     }
     public function emailunverified()
     {
        return view ('ManageUsers/EmailUnverified');
     }
     public function mobileunverified()
     {
        return view('ManageUsers/MobileUnverified');
     }
     public function allusers()
     {
        return view('ManageUsers/AllUsers');
     }
     public function sendnotification()
     {
      return view('ManageUsers/SendNotification');
     }




    
}