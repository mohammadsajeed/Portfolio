<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;
use Image;

class Artical_Controller extends Controller
{
    public function index(){
        $read_aritcals = Artical::Orderby('id','desc')->get();

        return view('admin.artical',compact('read_aritcals'));
    }
    public function add_artical(Request $req){
        $req->validate([
            'title'=>'required',
            'date'=>'required',
            'file'=>'required',
            'category'=>'required',
            'description'=>'required',
        ]);

        $img = $req->file;
          $filename = $img->getClientOriginalName();
          $imageresize = image::make($img->getRealPath());
          $imageresize->resize(800,862);
          $imageresize->save(public_path('images/'.$filename));

        Artical::create([
            'title'=>$req->title,
            'date'=>$req->date,
            'pic'=>$filename,
            'category'=>$req->category,
            'description'=>$req->description,

        ]);
        session()->flash('msg','Artical Added Successfully ');
         return redirect('artical');
    }
    public function artical_delete($id)
    {
        $delete = Artical::find($id);
        unlink('images/'.$delete->pic);
        $delete->delete();
        session()->flash('delete','Record Deleted Successfully');
        return redirect('artical');

    }

}
