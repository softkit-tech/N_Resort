<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\Staff;
use App\Models\Gallary;
use App\Models\Video;
use DB;
class MainController extends Controller
{
    public function index()
    {
    	$all_slider=Slider::all();
    	$all_room=DB::table('hotals')->latest()->limit(9)->get();


    	return view('pages.index',compact('all_slider','all_room'));
    }




    public function AllRoom()
    {
        $list_room=DB::table('hotals')->paginate(10);
       return view('pages.allroom',compact('list_room'));
    }



    public function RoomDetails($id)
    {
       $RoomDetails=DB::table('hotals')
        ->join('categories','hotals.category_id','categories.id')
        ->select('hotals.*','categories.category_name')->where('hotals.id',$id)->first();

       return view('pages.details_room',compact('RoomDetails'));
    }





    public function CategoryWish($id)
    {
        $category_wish=DB::table('hotals')->where('category_id',$id)->get();
        return view('pages.categorywish',compact('category_wish'));
    }


    public function AboutUs()
    {
        return view('pages.about');
    }

       public function ContactUS()
    {
        return view('pages.contact');
    }




    public function contact_store(Request $request)
    {
    	$contact= new Contact();
    	$contact->name=$request->name;
    	$contact->phone=$request->phone;
    	$contact->subject=$request->subject;
    	$contact->email=$request->email;
    	$contact->message=$request->message;
        $contact->save();
    	 $notification=array(
                          'messege'=>'Contact  Sucessfully ',
                           'alert-type'=>'success'
                     );
         return redirect()->back()->with($notification);
         
    }


   public function BlogList()

   {
    $list_blog=DB::table('blogs')->get();
    return view('pages.blog',compact('list_blog'));
   }


   public function BlogWish($id)
   {
    $blog_wish=DB::table('blogs')->where('postcategory_id',$id)->get();
    return view('pages.blogwish',compact('blog_wish'));
   }
  






 
}
