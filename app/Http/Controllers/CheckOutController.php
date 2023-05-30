<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Cart;
class CheckOutController extends Controller
{
    

    public function BookingDone(Request $request)
    {

               

    	         $data=array();



    	         $data['user_id']=Auth::user()->id;
    	         $data['subtotal']=Cart::subtotal();
    	         $data['total']=Cart::subtotal();
    	         $data['status']=0;
    	         $data['payment_type']=$request->payment_type;
    	         $data['tranction_id']=$request->tranction_id;
                 $data['bkash_number']=$request->bkash_number;
                 $data['adult']=$request->adult;
                 $data['child']=$request->child;
                 $data['arrival_date']=$request->arrival_date;
                 $data['arrival_time']=$request->arrival_time;
                 $data['department_date']=$request->department_date;
                 $data['department_time']=$request->department_time;
    	         $data['qty']=$request->qty;

    	         //return response()->json($data);
    	        $order_id=DB::table('orders')->insertGetId($data);

    	  // insert shipping details table

                    //insert data into orderdeatils
                  $content=Cart::content();
                  $details=array();
                  foreach ($content as $row) {
                    $details['order_id']= $order_id;
                    $details['product_id']=$row->id;
                    $details['product_name']=$row->name;
                    $details['color']=$row->options->color;
                    $details['size']=$row->options->size;
                    $details['quantity']=$row->qty;
                    $details['singleprice']=$row->price;
                    $details['totalprice']=$row->qty * $row->price;
                    DB::table('order_details')->insert($details);
                  }
    	           Cart::destroy();
    	           
    	            $notification=array(
    	                             'messege'=>'Successfully Done',
    	                              'alert-type'=>'success'
    	                        );
    	                return Redirect()->back()->with($notification);
    }
}
