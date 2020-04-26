<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendMail(Request $request) {

    	$name = $request->input('name');
    	$email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
  Mail::send('welcome',['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message ], function ($message) 
  {
  	   $message->from( 'john@gmail.com' , 'John Doe');
  	   $message->to('theresaobamwonyi@gmail.com');
  });

  return redirect()->to('/')->withSuccess('Message Sent Successfully.');

    }


}
