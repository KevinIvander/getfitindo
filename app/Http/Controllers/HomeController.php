<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class HomeController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, ['email' => 'required', 'name' => 'required', 'comment' => 'required']);
        $name = $request['name'];
        $email =$request['email'];
        $comment =$request['comment'];

        Mail::send([],[], function ($message) use($email,$name,$comment)
        {
             $message->from('getfit.yk@gmail.com','User Ideas');
             $message->to('getfit.yk@gmail.com')
             ->subject($email)
             ->setBody('Email From : '.$email."\r\n".'Name : '. $name."\r\n".'Message : '.$comment);
         });
        return redirect()->to('/');
    }
}
