<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
class SliderController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');


    }  
    public function add()
    {
    	return view('admin.slider.create');
    }

    public function store(Request $request)
    {
    	$slider= new Slider();
    	$slider->title=$request->title;
    	$slider->link=$request->link;
    

    	  if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/slider/' .$img);
        Image::make($image)->save($location);
        $slider->image = $img;
       }

         $slider->save();
         $notification=array(
            'messege'=>'Teacher  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function index()
    {
          $all_slider=Slider::all();
      
         return view('admin.slider.index',compact('all_slider'));
    }

    public function edit($id)
    {
        $edit_data=Slider::find($id);
        return view('admin.slider.edit',compact('edit_data'));
    }


    public function update(Request $request,$id)
    {
         $slider=Slider::find($id);
         $slider->title=$request->title;
         $slider->link=$request->link;
         $slider->status=$request->status;

          if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/slider/' .$img);
        Image::make($image)->save($location);
        $slider->image = $img;
       }

         $slider->save();
         $notification=array(
            'messege'=>'Slider  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.slider')->with($notification);
    }

    public function delete($id)

  {
    $slider=Slider::find($id);
    $slider->delete();
    $notification=array(
            'messege'=>'Slider  Delete Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

  }
}
