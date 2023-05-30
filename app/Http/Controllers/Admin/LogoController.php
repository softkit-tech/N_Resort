<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Image;

class LogoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');


    }  


     public function add()
    {
    	return view('admin.logo.create');
    }

      public function store(Request $request)
    {
    	$staff= new Logo();
  
    	  if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/logo/' .$img);
        Image::make($image)->save($location);
        $staff->image = $img;
       }

         $staff->save();
         $notification=array(
            'messege'=>'Logo  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function index()
    {
        $all_logo=Logo::all();
        return view('admin.logo.index',compact('all_logo'));
    }


    public function delete($id)
    {
        $user=Logo::find($id);
        $user->delete();
          $notification=array(
            'messege'=>'Logo  Delete Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

}
