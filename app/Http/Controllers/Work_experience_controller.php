<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work_experience;

class Work_experience_controller extends Controller
{
    public function index(){

        $read_work_experience = Work_experience::OrderBy('id','desc')->get();
        return view('admin.work_experience',compact('read_work_experience'));
    }

    public function add_work(Request $req){
        $req->validate([
            'job_title'=>'required',
            'date'=>'required',
            'info'=>'required',
        ]);

        Work_experience::create([
            'Job_title'=> $req->job_title,
            'date_details'=> $req->date,
            'description'=> $req->info,
        ]);

        session()->flash('msg','Work Experience Added Successfully');
        return redirect('work');

    }
}
