<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function contact_mail(Request $request){
        

        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'name'=> $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('osita@mail.com')->send(new ContactMe($data));

        // return $request->all();

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
