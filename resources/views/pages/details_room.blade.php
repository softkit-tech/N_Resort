@extends('layouts.app')

@section('content')        

        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Room Details</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                       
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Search Room Area =================-->
        <section class="room_details_area">
            <div class="container">
                <div class="row room_details_inner">
                    <div class="col-md-8">
                        <div class="room_details_content">
                            <div class="room_d_main_text">
                                <div class="room_details_img owl-carousel">
                                     @foreach($productimage as $image)
                                          @if($RoomDetails->id==$image->hotal_id) 


                                    <div class="item">
                                        <img src="{{asset($image->image)}}" alt="">
                                    </div>
                                   @endif
                                    @endforeach
                                 

                                </div>
                                <a href="#"><h4><span>{{$RoomDetails->room_title}}</span></h4></a>
                                <h5>TK:{{$RoomDetails->room_rate}} <span>/{{$RoomDetails->perday}}</span></h5>
                                <h3>Childen:{{$RoomDetails->childen}} <span>/Adult{{$RoomDetails->adult}}</span></h3>
                                <h3>Room Rante:@if($RoomDetails->status==1)
                                     <span class="badge badge-success">Booking</span>

                                  @else
                                  <span class="badge badge-danger">Avalible</span>
                                  @endif</h3>
                                <p>{!!$RoomDetails->room_details !!}.</p>
                            </div>
                            <div class="room_service_list">
                                <h3 class="room_d_title">Room services</h3>
                                <div class="row room_service_list_inner">
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Breakfast Included</a></li>
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
                            <div class="room_details_clients">
                                <h3 class="room_d_title">customer Reviews</h3>
                                <div class="clients_slider owl-carousel">
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/clients/client-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <a href="#"><h4>- Michale John</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/clients/client-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <a href="#"><h4>- Michale John</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/clients/client-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <a href="#"><h4>- Michale John</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room_details_comment">
                                <h4>Add review</h4>
                                <form class="contact_us_form row" action="http://designarc.biz/demos/hilltown/theme/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h5>Your Rating</h5>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="review"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search_right_sidebar">
                            <div class="book_room_area">
                                <div class="book_room_box">
                               
                               <form action="{{route('add.booking',$RoomDetails->id)}}">

                                <input type="hidden" name="room_id" value="{{$RoomDetails->id}}">
                               
                                    <div class="book_table_item">
                                     <h4>Arrival Date</h3>
                                        <input type="date" name="arrival_date" placeholder="Availve Time">
                                    </div>
                                    <div class="book_table_item">
                                     <h4>Arrival Time</h3>
                                        <input type="text" name="arrival_time" placeholder="Availve Time">
                                    </div>
                                   <div class="book_table_item">
                                     <h4>Department Date</h3>
                                        <input type="date" name="department_date" placeholder="Department Time">
                                    </div>
                                    <div class="book_table_item">
                                     <h4>Department Time</h3>
                                        <input type="text" name="department_time" placeholder="Department Time">
                                    </div>

                                    <div class="book_table_item">
                                     <h4>Hand Cash </h3>
                                        <input type="radio" name="payment_type" value="HandCash" placeholder="Hand Cash">
                                    </div>          
                                     <div class="book_table_item">
                                     <h4>Bkash  </h3>
                                        <input type="radio" name="payment_type" value="Bkash" placeholder="Bkash">
                                       
                                
                                    </div>
                                            <div class="book_table_item">
                                     <h4>Tranction Id </h3>
                                        <input type="text" name="tranction_id" placeholder="Tranction Id">
                                    </div>
                                          <div class="book_table_item">
                                     <h4>Bkash Number</h3>
                                         <input type="text" name="bkash_number" placeholder="Bkash Number">
                                    </div>
                                   
                                   
                                </div>
                            </div>
                            <div class="book_now_button">
                                <button type="submit" class="book_now_btn_black">Book now </button>
                            </div>
                        </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection        