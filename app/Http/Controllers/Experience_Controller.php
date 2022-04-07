<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Experience;

class Experience_Controller extends Controller
{
    public function index(){
        $read_experience = Experience::OrderBy('id','desc')->get();
        return view('admin.expericnce',compact('read_experience'));
    }
    public function add_experience(Request $req){


        $req->validate([
            'feild_name'=> 'required',
            'description'=> 'required',
        ]);
        Experience::create([
            'feild_name'=> $req->feild_name,
            'description'=> $req->description,
        ]);
        session()->flash('msg','Experience Added Successfully');
         return redirect('experience');

    }
}
