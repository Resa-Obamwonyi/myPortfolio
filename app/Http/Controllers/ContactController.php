<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\ContactMe;

class ContactController extends Controller
{
    public function home( Request $request)
    {
        return view('contact');
    }
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
            ]);
           ContactMe::create($request->all());
           return back()->with('success', 'Thanks for contacting me!');
    }
}
