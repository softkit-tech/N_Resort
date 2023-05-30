<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Category;
class CategoryController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');


    }  
    public function add()
    {
    	return view('admin.category.create');
    }

    public function store(Request $request)
    {
    	$category= new Category();
    	$category->category_name=$request->category_name;

    	  if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/category/' .$img);
        Image::make($image)->save($location);
        $category->image = $img;
       }

         $category->save();
         $notification=array(
            'messege'=>'Category  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function index()
    {
          $all_category=Category::all();
      
         return view('admin.category.index',compact('all_category'));
    }

    public function edit($id)
    {
        $edit_data=Category::find($id);
        return view('admin.category.edit',compact('edit_data'));
    }


    public function update(Request $request,$id)
    {
         $category=Category::find($id);
         $category->category_name=$request->category_name;

          if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/category/' .$img);
        Image::make($image)->save($location);
        $category->image = $img;
       }

         $category->save();
         $notification=array(
            'messege'=>'Category  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.category')->with($notification);
    }

    public function delete($id)

  {
    $category=Category::find($id);
    $category->delete();
    $notification=array(
            'messege'=>'Category  Delete Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

  }
}
