<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\studentinfo;


class MailController extends Controller
{
    public function contactform(request $req){
        $user = studentinfo::where('Username', session('user'))->first();

        $details=[
            'name'=>$req->name,
            'phone'=>$req->phone,
            'email'=>$req->email,
            'interestedprogram'=>$req->interestedprogram,
            'date'=>$req->date,
            'educationachieved'=>$req->educationachieved,
            'question'=>$req->question,
          
        ];
        Mail::to($user->Email)->send(new ContactMail($details));
        Mail::to('shaywebdeveloper@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('alert', 'Message Sent! Thank You.');
    }
}
