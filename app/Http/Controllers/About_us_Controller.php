<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\About_us;

class About_us_Controller extends Controller
{
    public function index(){
        $read_about = About_us::OrderBy('id','desc')->get();
        return view('admin.about',compact('read_about'));
    }
    public function add_about_us(Request $re){


     $re->validate([
         'description'=>'required',
     ]);
     About_us::create([
          'Description'=> $re->description,
     ]);
     session()->flash('msg','About Added Successfuly ');
     return  redirect('about_us');
    }
    public function about_delete($id)
    {
        $delete = About_us::find($id);
        $delete->delete();
        session()->flash('delete','Record Deleted Successfully');
        return redirect('about_us');
    }

}
