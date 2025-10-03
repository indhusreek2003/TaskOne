<?php
namespace App\Controllers;
class supportTicket{
    public function index()
    {
     return view('SupportTicket\PendingTicket');
    }
    public function Closeticket()
    {
        return view('SupportTicket/CloseTicket');
    }
    public function answerticket()
    {
        return view('SupportTicket/AnswerTicket');
  }
  public function allticket()
  {
    return view('SupportTicket/AllTicket');
  }
}