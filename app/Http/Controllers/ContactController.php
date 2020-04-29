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

      	//dd($request->all());

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::send('email.contact_email', ['name' => $request->name,'email' => $request->email,'subject' => $request->subject,'msg' => $request->message],
                 
                 function($mail) use ($request)  {

                  $mail->from($request->email, $request->name);

                  $mail->to('theresaobamwonyi@gmail.com')->subject( $request->subject);
               }
           );

        return back()->with('success', 'Thank you for your message!');
 /*
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        \
        */

}
}