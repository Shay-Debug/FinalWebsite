<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\applicationdetail;


class ApplicantController extends Controller
{
    public function application(Request $req){

        $data=new applicationdetail;

                $data->StudentName=$req->user;
                $data->ProgrameName=$req->webdev;
                $data->ProgrameCost=$req->coursecost;
                $data->ApplicantStatus=$req->status;
                $data->save();
                // return redirect()->back()->with('alert', 'You have been registered successfully.');
                return redirect('studentpro');
            }


            // ADMIN PAGE

            // Retieving Info From Database


             public function adminapplicantinfo()
    {
        $data= applicationdetail::all();

        return view('admin', ['datastorage'=>$data]);
    }


    // Showing Data in form
    public function adminapplicantshowdata($id)
    {
        $data=applicationdetail::find($id);
        return view('AdminApplicantEditForm', ['data'=>$data]);
    }


    // Adding Changes 
    public function adminapplicantupdatedata(Request $req)
    {
        // return $req->input();
        $data=applicationdetail::find($req->id);
        $data->Id=$req->id;
        $data->StudentName=$req->name;
        $data->ProgrameName=$req->programename;
        $data->ProgrameCost=$req->programecost;
        $data->ApplicantStatus=$req->applicationstatus;
        $data->save();
        return redirect('admin');
    }



    // Deleting
    function applicantdelete($id){
        $data=applicationdetail::find($id);
        $data->delete();
        return redirect("admin");
    
    }   
               
            }

            

    


