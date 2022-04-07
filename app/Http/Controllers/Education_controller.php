<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education_info;

class Education_controller extends Controller
{
    public function index(){
        $read_edaucation = Education_info::Orderby('id','desc')->get();
        return view('admin.education',compact('read_edaucation'));
    }
    public function add_degree(Request $req)
    {
         $req->validate([
             'degree_title'=>'required',
             'degree_info'=>'required',
         ]);

        Education_info::create([
            'degree_name'=>$req->degree_title,
            'degree_info'=>$req->degree_info,
        ]);

        session()->flash('msg','Degree Information added successfully');
        return redirect('education');

    }
}
