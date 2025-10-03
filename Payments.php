<?php
namespace App\Controllers;
class payments extends BaseController{
    public function index()
    {
        return view('Payments/pendingPayments');
    }
    public function approvedpayment()
    {
        return view('Payments/ApprovedPayments');
    }
    public function successfullpayments()
    {
        return view('Payments/SuccessfulPayments');
    }
    public function rejectedpayments()
{
     return view('Payments/RejectedPayments'); 
}
public function intiatedpayments()
{
    return view('Payments/IntiatedPayments');
}
public function allpayments()
{
    return view('Payments/AllPayments');
}
}