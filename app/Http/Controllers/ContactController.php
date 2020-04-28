<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function getContact() { 

       return view('/contact'); 
     } 

      public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('email.contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('theresaobamwonyi@gmail.com');
               });
        return back()->with('success', 'Thank you for your message!');
}
}