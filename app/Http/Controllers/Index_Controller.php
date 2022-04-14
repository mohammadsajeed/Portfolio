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
       $experienec = Experience::OrderBy('id','desc')->limit(1)->get();
        return view('index',compact('about_us,experienec'));
   }


}
