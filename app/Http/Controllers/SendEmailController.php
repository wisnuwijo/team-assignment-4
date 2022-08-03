<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Mail;
 
use App\Mail\NotifyMail;

class SendEmailController extends Controller
{
    public function index(Request $req)
    {
 
      Mail::to($req->email)->send(new NotifyMail());
 
      if (Mail::failures()) {
           return response([
                "msg" => 'Sorry! Please try again latter'
           ]);
      }else{
           return response([
                "msg" => 'Great! Successfully send in your mail'
           ]);
         }
    }
}
