<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recent_work;
use Image;
class Recent_work_Controller extends Controller
{
    public function index()
    {
        $read_project = Recent_work::OrderBy('id','desc')->get();
        return view('admin.recent_work',compact('read_project'));
    }
    public function add_project(Request $req )
    {
        $req->validate([
            'project_name'=>'required',
            'github_link'=>'required',
            'pic'=>'required',
            'description'=>'required',
        ]);

          $img = $req->pic;
          $filename = $img->getClientOriginalName();
          $imageresize = image::make($img->getRealPath());
          $imageresize->resize(800,862);
          $imageresize->save(public_path('images/'.$filename));

          Recent_work::create([
              'project_name'=> $req->project_name,
              'description'=> $req->description,
              'github_link'=> $req->github_link,
              'pic'=>  $filename,

          ]);
          session()->flash('msg','Project Add succesfully ');
              return redirect('project');
    }
    public function project_delete($id)
    {
         $delete = Recent_work::find($id);
         unlink('images/'.$delete->pic);
         $delete->delete();
         session()->flash('delete','Record Deleted Successfully');
         return redirect('project');
    }
}

