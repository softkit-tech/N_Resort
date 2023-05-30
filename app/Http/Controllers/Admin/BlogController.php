<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Image;
use DB;
class BlogController extends Controller
{
        public function __construct()
      {
          $this->middleware('auth:admin');


      }  
      public function add()
      {
      	return view('admin.blog.create');
      }

      public function store(Request $request)
      {
      	$blog= new Blog();
        $blog->title=$request->title;
        $blog->postcategory_id=$request->postcategory_id;
        $blog->date=$request->date;
      	$blog->detail=$request->detail;

      	  if ($request->image > 0) {
          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('backend/media/blog/' .$img);
          Image::make($image)->save($location);
          $blog->image = $img;
         }

           $blog->save();
           $notification=array(
              'messege'=>'Blog  Added Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
      }

      public function index()
      {
            // $all_blog=Blog::all();

            $all_blog=DB::table('blogs')
               ->join('post_categories','blogs.postcategory_id','post_categories.id')
                  ->select('blogs.*','post_categories.postcategory')
            ->get();
        
           return view('admin.blog.index',compact('all_blog'));
      }

      public function edit($id)
      {
          $edit_data=Blog::find($id);
          return view('admin.blog.edit',compact('edit_data'));
      }


      public function update(Request $request,$id)
      {
           $blog=Blog::find($id);
             $blog->title=$request->title;
             $blog->postcategory_id=$request->postcategory_id;
             $blog->date=$request->date;
            $blog->detail=$request->detail;
            if ($request->image > 0) {
          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('backend/media/blog/' .$img);
          Image::make($image)->save($location);
          $blog->image = $img;
         }

           $blog->save();
           $notification=array(
              'messege'=>'Blog  Updated Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.blog')->with($notification);
      }

      public function delete($id)

    {
      $blog=Blog::find($id);
      $blog->delete();
      $notification=array(
              'messege'=>'Blog  Delete Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);

    }
}
