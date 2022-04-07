<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills_technology;

class Skills_Techonligy_Controller extends Controller
{
     public function index(){

        $read_technology = Skills_technology::Orderby('id','desc')->get();
        return view('admin.skills',compact('read_technology'));
     }

     public function add_skills(Request $req){

        $req->validate([
            'skills_name'=>'required',
            'skills_persentage'=>'required'

        ]);

        Skills_technology::create([
        'technology_name'=> $req->skills_name,
        'ablity_persentage'=> $req->skills_persentage,
        ]);

        session()->flash('msg','Skill Added Successfully');
        return redirect('skills');



     }
}
