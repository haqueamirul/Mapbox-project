<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newslatter;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function newLatter()
    {
      $allemail = Newslatter::all();
    	return view('admin.newslatter', compact('allemail'));
    }

    public function createEmail(Request $request)
      {
      	$name = $request->name;
      	$email = $request->email;

      	$allemail = new Newslatter();
      	$allemail->name = $name;
      	$allemail->email = $email;
      	$allemail->save();

      	return back()->with('email_added','Subscription Successful!!');
      }

      public function sendEmail(Request $request)
      {
        $details = [
          'fname' => $request->fname,
          'lname' => $request->lname,
          'email' => $request->email,
          'phone' => $request->phone,
          'interest' => $request->interest,
          'company' => $request->company,
          'message' => $request->message,
        ];

        Mail::to('haqueamirul76@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
      }

}
