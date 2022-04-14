<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_us;
use App\Models\Experience;
use App\Models\Education_info;
use App\Models\Artical;
use App\Models\Recent_work;
use App\Models\Skills_technology;
use App\Models\Work_experience;

class Index_Controller extends Controller
{

   public function index()
   {
       $about_us = About_us::OrderBy('id','desc')->limit(1)->get();
       $read_experienec = Experience::OrderBy('id','desc')->get();
       $read_skills = Skills_technology::OrderBy('id','desc')->get();
       $read_education = Education_info::OrderBy('id','asc')->get();
       $read_work_experience = Work_experience::OrderBy('id','asc')->get();
       $project_work = Recent_work::OrderBy('id','asc')->get();
       $read_artical = Artical::OrderBy('id','asc')->get();
        return view('index',compact('about_us','read_experienec','read_skills','read_education','read_work_experience','project_work','read_artical'));
   }


}
