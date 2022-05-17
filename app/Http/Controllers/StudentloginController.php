<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\studentinfo;
use Illuminate\Support\Facades\DB;



class StudentloginController extends Controller
{
    public function checksession()
    {
        if (session()->has('user')) {
            return view('studentpro');
        } else {
            return redirect('/logout');
        }
    }
  




    public function studentlogin(Request $req)
    {

        // Form Validation
       
        $req->validate([
                // 'name' => 'required|min:3|max:50',
                'username' => 'required|min:3|max:50',
                'password' => 'required|min:6',
            ]);
    

        if ($req->radio== 'user') {
            $userinfo=studentinfo::where('Username', '=', $req->username)->where('Password', '=', $req->password)->first();
            if (!$userinfo) {
                return back()->with('fail', 'User Not Found');
            } else {
                $req->session()->put('user', $userinfo->Username);//Session Code
                $req->session()->put('id', $userinfo->id);//Session Code
                return redirect('studentpro');
            }
        } else {
            if ($req->radio== 'admin') {
                $admininfo=DB::table('admin')->where('Username', '=', $req->username)->where('Password', '=', $req->password)->first();
                if (!$admininfo) {
                    return back()->with('fail', 'Admin Not Found');
                } else {
                    $req->session()->put('user', $admininfo->Username);//Session Code
                    return redirect('admin');
                }
            }
        }
    }


    // *****************************
//     public function adminlogin(Request $req)
//     {
//         // dd($req);
//         if($req->radio== 'admin'){

//         }
//         // Form Validation
    
//         $req->validate([
//                 // 'name' => 'required|min:3|max:50',
//                 'username' => 'required|min:3|max:50',
//                 'password' => 'required|min:6',
//             ]);

    //   $admininfo=DB::table('admin')->where('Username', '=', $req->username)->where('Password', '=', $req->password)->first();
    // if (!$admininfo) {
//             return back()->with('fail', 'Admin is Not Found');
//         } else{
//             $req->session()->put('user', $admininfo->Username);//Session Code
//             return redirect('landing');
//         }
//     }



//     $userinfo=DB::table('users')->where('Email', '=', $req->email)->where('Password', '=', $req->password)->first();
//     if (!$userinfo) {
//         return back()->with('fail', 'User is Not Found');
//     } else {
//         // $req->session()->put('user', $userinfo->Username);//Session Code
//        return redirect('landing');
//     }
    // }

    // *****************************
    


    // Code to end user session upon log out

    public function endsession()
    {
        if (session()->has('user')) {
            session()->pull('user');
        }
        return redirect('log');
    }
}



