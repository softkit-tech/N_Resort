<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotal;
use App\Models\HotalImage;
use Image;
use DB;
class HotalController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');


    }  
    public function add()
    {
    	return view('admin.hotal.create');
    }

    public function store(Request $request)
    {
    	$hotal= new Hotal();
      $hotal->category_id=$request->category_id;
    	$hotal->room_title=$request->room_title;
    	$hotal->room_number=$request->room_number;
    	$hotal->status=$request->status;
      $hotal->room_details=$request->room_details;
      $hotal->detail=$request->detail;
      $hotal->perday=$request->perday;
      $hotal->childen=$request->childen;
      $hotal->adult=$request->adult;
    	$hotal->room_rate=$request->room_rate;
         $hotal->save(); 

    	 $productId=$hotal->id;
    	$images = $request->file('image');
    	foreach($images as $image)
    	{
    	   // image01 upload
    	    $name =  time().'-'.$image->getClientOriginalName();
    	    $uploadpath = 'public/backend/media/hotal/';
    	    $image->move($uploadpath, $name);
    	    $imageUrl = $uploadpath.$name;  

    	     $proimage= new HotalImage();
    	     $proimage->hotal_id = $productId;
    	     $proimage->image=$imageUrl;
    	     $proimage->save(); 
    	}

         $proimage->save();
         $notification=array(
            'messege'=>'Room  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function index()
    {
          $all_room=DB::table('hotals')

          ->join('categories','hotals.category_id','categories.id')
           ->select('hotals.*','categories.category_name')
           ->get();
          $productimage = DB::table('hotal_images')
           ->join('hotals','hotal_images.hotal_id','=','hotals.id')
           ->select('hotals.room_number','hotal_images.*')
           ->orderBy('hotal_images.id','DESC')
           ->get();
      
         return view('admin.hotal.index',compact('all_room','productimage'));
    }

    public function edit($id)
    {
        $edit_data=Hotal::find($id);

        $productimage = DB::table('hotal_images')
        ->join('hotals','hotal_images.hotal_id','=','hotals.id')
        ->select('hotals.room_number','hotal_images.*')
        ->orderBy('hotal_images.id','DESC')
        ->get();
        return view('admin.hotal.edit',compact('edit_data','productimage'));
    }


    public function update(Request $request,$id)
    {
        $hotal=Hotal::find($id);
            	$hotal->room_title=$request->room_title;
            	$hotal->room_number=$request->room_number;
            	$hotal->status=$request->status;
            	$hotal->room_details=$request->room_details;
                 $hotal->save(); 

            	 $productId=$hotal->id;
            	$images = $request->file('image');
            	foreach($images as $image)
            	{
            	   // image01 upload
            	    $name =  time().'-'.$image->getClientOriginalName();
            	    $uploadpath = 'public/backend/media/hotal/';
            	    $image->move($uploadpath, $name);
            	    $imageUrl = $uploadpath.$name;  

            	     $proimage= new HotalImage();
            	     $proimage->hotal_id = $productId;
            	     $proimage->image=$imageUrl;
            	     $proimage->save(); 
            	}

                 $proimage->save();
                 $notification=array(
                    'messege'=>'Room  Updated Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->route('all.hotal')->with($notification);
    }

    public function delete($id)

  {
    $hotal=Hotal::find($id);
    $hotal->delete();
    $notification=array(
            'messege'=>'Hotal  Delete Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

  }

  public function ImageDelete($id)
  {
  	    $delete_img = HotalImage::find($id);
        $delete_img->delete();
          $notification=array(
            'messege'=>'Hotal  Delete Image Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
  }
}
