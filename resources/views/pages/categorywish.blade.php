@extends('layouts.app')

@section('content')



    <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Category Wish  Page</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>



        <section class="explor_room_area">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="pull-left">
                        <div class="left_ex_title">
                            <h2> Our <span>rooms</span></h2>
                            <p>choose room according to budget</p>
                        </div>
                    </div>



                  
                </div>
                <div class="row explor_room_item_inner">
                     @foreach($category_wish as $row)
                    <div class="col-md-4 col-sm-6">
                       @foreach($productimage as $proimage)
                        @if($row->id==$proimage->hotal_id)
                        <div class="explor_item">
                            <a href="{{route('room.detail',$row->id)}}" class="room_image">
                                <img src="{{asset($proimage->image)}}" alt="">
                            </a>

                        @break
                       @endif
                      @endforeach
                            <div class="explor_text">
                                <a href="{{route('room.detail',$row->id)}}"><h4>{{$row->room_title}}</h4></a>
                                <ul>
                                    <li><a href="#">{{$row->detail}}</a></li>
                                  <!--   <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li> -->
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>TK:{{$row->room_rate}} <span>/ {{$row->perday}}</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="{{route('room.detail',$row->id)}}">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                 @endforeach
                </div>
            </div>
        </section>
   

 
 
  
       

@endsection       