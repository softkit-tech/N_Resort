<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ReportController extends Controller
{
   
      public function __construct()
    {
        $this->middleware('auth:admin');


    }  


    public function ReportList()
    {

    	$all_report=DB::table('carts')
       ->join('users','carts.user_id','users.id')
       ->join('hotals','carts.room_id','hotals.id')
       ->select('carts.*','users.name','users.phone','hotals.room_number')
    	->get();
    	return view('admin.report.index',compact('all_report'));
    }


    public function ReportSingle($id)
    {
    	$single_view=DB::table('carts')
      ->join('users','carts.user_id','users.id')
      ->join('hotals','carts.room_id','hotals.id')
      ->select('carts.*','users.name','users.phone','users.email','hotals.room_number','hotals.room_title','hotals.detail','hotals.room_rate')
      ->where('carts.id',$id)->first();
    	return view('admin.report.single',compact('single_view'));
    }
}
