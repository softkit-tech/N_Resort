@extends('layouts.app')

@section('content')        

        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Single View</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                       
                    </ul>
                </div>
            </div>
        </section>

          <div class="container">
                    <div class="room_service_list">
                                <h3 class="room_d_title">Single Booking</h3>
                                <div class="row room_service_list_inner">
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> {{$single_view_room->name}}</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Free wifi</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Double Bed</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>120 sq mt.</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>8 persons</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Free internet</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>private balcony</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>good room service</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>flat screen tv</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>fully AC</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>mountain view</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>free pick & drop facilies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

@endsection        