<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
  function send(Request $request){
    Mail::send(new SendMail($request));
    $message="Appointment Request Forwarded";
    return view('services')->with('message', $message);
}
}
