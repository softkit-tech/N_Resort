<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');


    }  
    public function add()
    {
    	return view('admin.social.create');
    }

    public function store(Request $request)
    {



    	 $social= new Social();
         $social->icon=$request->icon;
         $social->link=$request->link;
         $social->save();
            
          $notification=array(
            'messege'=>'social  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function index()
    {
        $all_social=Social::all();
        return view('admin.social.index',compact('all_social'));
    }

    public function edit($id)
    {
        $edit_data=Social::find($id);
        return view('admin.social.edit',compact('edit_data'));
    }

    public function update(Request $request,$id)
    {
        $social=Social::find($id);

      $social->icon=$request->icon;
      $social->link=$request->link;
         $social->save();
          $notification=array(
            'messege'=>'Social  Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.social')->with($notification);
    }

    public function delete($id)
    {
        $social=Social::find($id);
        $social->delete();
          $notification=array(
            'messege'=>'Social  Delete Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
