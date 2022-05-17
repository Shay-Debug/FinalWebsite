<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\studentinfo;


class AdminStudentController extends Controller
{
    public function adminstudentinfo()
    {
        $data= studentinfo::all();

        return view('allstudents', ['datastorage'=>$data]);
    }


    public function adminshowdata($id)
    {
        $data=studentinfo::find($id);
        return view('AdminEditForm', ['data'=>$data]);
    }
    

    public function adminupdatedata(Request $req)
    {
        // return $req->input();
        $data=studentinfo::find($req->id);
        $data->id=$req->id;
        $data->Username=$req->username;
        $data->Firstname=$req->firstname;
        $data->Lastname=$req->lastname;
        $data->Address=$req->address;
        $data->Phone=$req->phone;
        $data->Email=$req->email;
        $data->save();
        return redirect('allstudents');
    }


    function studentinfodelete($id){
        $data=studentinfo::find($id);
        $data->delete();
        return redirect("allstudents");
    
    }   
}