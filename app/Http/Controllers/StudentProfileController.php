<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\studentinfo;
use App\Models\applicationdetail;



class StudentProfileController extends Controller
{
    function studentinfo(){
        $data= studentinfo::where('Username', session('user'))->get();
        $application= applicationdetail::where('StudentName', session('user'))->get();

        return view('studentpro',['datastorage'=>$data],['application'=>$application]);
        }


        function applicationinfo(){
            $application= applicationdetail::where('StudentName', session('user'))->get();
            return view('test',['application'=>$application]);
            }
        



        function showdata($id){
            $data=studentinfo::find($id);
            return view('studentproedit',['data'=>$data]);
        }



    

        function updatedata(Request $req){
            $data=studentinfo::find($req->id);
            $data->id=$req->id;
            $data->Firstname=$req->firstname;
            $data->Lastname=$req->lastname;
            $data->Email=$req->email;
            $data->Phone=$req->phone;
            $data->Address=$req->address;
            $data->save();
            return redirect('studentpro');
            
        }


// Upload Photo Method
        function avatarupdate(Request $req, $id ){
            // dd($id);
            // dd(studentinfo::find($id));
            $avatar_name = session('user') . '.'.  $req->image->extension();
            // $req->image->storeAs('/public/avatar', $avatar_name);
            $req->image->move(public_path('Avatar'), $avatar_name);
            studentinfo::find($id)->update([
                'Avatar' => $avatar_name
            ]);

            return redirect('/studentpro');
        }


    

}
