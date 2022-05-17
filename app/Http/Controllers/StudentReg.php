<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\studentinfo;
use Illuminate\Support\Facades\DB;


class StudentReg extends Controller
{
    //
    public function val(Request $req)
    {

        // Form Validation
    
        $req->validate([
                'username' => 'required|unique:studentinfos|min:3|max:50',
                'fname' => 'required|min:3|max:50',
                'lname' => 'required|min:3|max:50',
                'address' => 'required|min:3|max:50',
                'phone' => 'required|min:3|max:50',
                'email' => 'required|email|unique:studentinfos',
                'password' => 'required|confirmed|min:6',
            ]);



            
            // Storing Form Info Inside Database from registration page

            $forminfo=new studentinfo;
            $verify=studentinfo::where("Email","=", "$req->email")->first();
            if ($verify===null) {
                $forminfo->id=$req->id;
                $forminfo->Username=$req->username;
                $forminfo->Firstname=$req->fname;
                $forminfo->Lastname=$req->lname;
                $forminfo->Address=$req->address;
                $forminfo->Phone=$req->phone;
                $forminfo->Email=$req->email;
                $forminfo->Password=$req->password;
                $forminfo->save();
                // return redirect()->back()->with('alert', 'You have been registered successfully.');
                return view('log');
            }else{
                return back()->with("fail", "Email entered already exist");
                return redirect("signup");
            }

            

    }

    





}