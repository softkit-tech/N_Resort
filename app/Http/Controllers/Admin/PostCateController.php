<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
class PostCateController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');


    }  
    public function add()
    {
    	return view('admin.postcategory.create');
    }

    public function store(Request $request)
    {
    	$postcategory= new PostCategory();
    	$postcategory->postcategory=$request->postcategory;

    	

         $postcategory->save();
         $notification=array(
            'messege'=>'PostCategory  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function index()
    {
          $all_postcategory=PostCategory::all();
      
         return view('admin.postcategory.index',compact('all_postcategory'));
    }

    public function edit($id)
    {
        $edit_data=PostCategory::find($id);
        return view('admin.postcategory.edit',compact('edit_data'));
    }


    public function update(Request $request,$id)
    {
         $postcategory=PostCategory::find($id);
         $postcategory->postcategory=$request->postcategory;

         
         $postcategory->save();
         $notification=array(
            'messege'=>'PostCategory  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.postcategory')->with($notification);
    }

    public function delete($id)

  {
    $postcategory=PostCategory::find($id);
    $postcategory->delete();
    $notification=array(
            'messege'=>'PostCategory  Delete Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

  }
}
