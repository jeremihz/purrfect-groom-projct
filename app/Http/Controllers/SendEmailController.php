<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'phone' => 'required|phone:KE,US|min:10',
            'petName' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i'
        ]);

        $appointment = new Appointment();
        $appointment->firstName = $request->get('firstName');
        $appointment->lastName = $request->get('lastName');
        $appointment->phone = $request->get('phone');
        $appointment->petName = $request->get('petName');
        $appointment->appointmentDate = $request->get('date');
        $appointment->appointmentTime = $request->get('time');
        $appointment->save();

//        Mail::send(new SendMail($request));
        $message = "Appointment Saved Successfully";
        return view('appointment')->with('message', $message);
    }
}
