<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendEmail (Request $request){
        if($request->name == null || $request->email ==null || $request->message ==null){
            return response()->json("Please, fill out all fields.");
        } else {
            $to_name='Isabela';
            $to_email='luizi.isabela@gmail.com';
            $from_name=$request->name;
            $from_email=$request->email;
            $data=['email'=>$request->email,'bodyMessage'=>$request->message];
            Mail::send('mail', $data, function ($message) use ($to_name,$to_email,$from_email, $from_name){
                $message->to($to_email, $to_name)->subject('Online Portfolio');
                $message->from($from_email,$from_name);
            });
        }
        return response()->json("Message sent successfully.");
    }
}
