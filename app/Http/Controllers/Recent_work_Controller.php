<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recent_work;
class Recent_work_Controller extends Controller
{
    public function index()
    {
        $read_project = Recent_work::OrderBy('id','desc')->get();
        return view('admin.recent_work',compact('read_project'));
    }
}
