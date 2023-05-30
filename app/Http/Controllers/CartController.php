<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Auth;
class CartController extends Controller
{
    


    public function AddCart(Request $request,$id)
    {
      


     
              if (Auth::check()) {


              $product=DB::table('hotals')->where('id', $id)->first();



              $data=array();
              $data['user_id']=Auth::user()->id;
              $data['room_id']=$id;
              $data['arrival_date']=$request->arrival_date;
              $data['arrival_time']=$request->arrival_time;
              $data['department_date']=$request->department_date;
              $data['department_time']=$request->department_time;

              

              $data['payment_type']=$request->payment_type;
              $data['tranction_id']=$request->tranction_id;
              $data['bkash_number']=$request->bkash_number;
              DB::table('carts')->insert($data);  
              $notification=array(
                               'messege'=>'Sucessfully BookIng Room',
                                'alert-type'=>'success'
                          );
              return redirect()->back()->with($notification);
            
              // $data['pro_price']=$product->discount_price;
              // $data['sub_total']=$product->discount_price;


             
             
                }else{
             $notification=array(
                              'messege'=>'AT first login your account',
                               'alert-type'=>'success'
                         );
             return redirect()->route('register')->with($notification);
        }



    	 // $booking=DB::table('hotals')->where('id',$id)->first();
      //    $productImage = DB::table('hotal_images')->where('hotal_id',$id)->first();
      //           $data=array();
     
      //              $data['id']=$id;
      //              $data['name']=$booking->room_title;
      //              $data['qty']=1;
      //              $data['price']= $booking->room_rate;          
      //              $data['weight']=1;
      //              $data['options']['image']=$productImage->image;
      //              $data['options']['room_number']=$booking->room_number;
      //               //return response()->json($data);
      //              Cart::add($data);
      //                $notification=array(
      //                  'messege'=>'Successfully Added To Cart',
      //                  'alert-type'=>'success'
      //                );
      //               return Redirect()->route('booking.list')->with($notification);
         
    } 





  public function BookingList()
  {

    $userid=Auth::id();

    $book_list=DB::table('carts')
          ->join('users','carts.user_id','users.id')
          ->join('hotals','carts.room_id','hotals.id')
          ->select('carts.*','users.name','users.phone','hotals.room_number','hotals.room_title','hotals.room_rate')         
       ->where('carts.user_id',$userid)
        ->get();
    return view('pages.book_list',compact('book_list'));
  }

   // public function BookingView($id)

   // {

   //  $userid=Auth::id();
   //    $single_view_room=DB::table('carts')
   //      ->join('users','carts.user_id','users.id')
   //      ->join('hotals','carts.room_id','hotals.id')
   //      ->select('carts.*','users.name','users.phone','users.email','hotals.room_number','hotals.room_title','hotals.detail','hotals.room_rate')
   //      ->where('carts.id',$userid)->first();

   //      return view('pages.room_single',compact('single_view_room'));
   // }




  
}
