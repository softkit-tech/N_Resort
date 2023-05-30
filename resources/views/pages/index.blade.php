@extends('layouts.app')

@section('content')

@php
$slider=DB::table('sliders')->get();
@endphp
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">

            
                <ul>
                    @foreach($slider as $row)
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/backend/media/slider/'.$row->image) }}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('public/backend/media/slider/'.$row->image) }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            id="slide-1586-layer-1" 
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['290','290','290','220','130']" 
                            data-fontsize="['55','55','55','40','25']"
                            data-lineheight="['59','59','59','50','35']"
                            data-width="['550','550','550','550','300']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']"></div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                id="slide-1587-layer-2" 
                                data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['435','435','435','340','225']"  
                                data-fontsize="['18','18','18','18','16']"
                                data-lineheight="['26','26','26','26']"
                                data-width="['550','550','550','550','300']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">.
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                                id="slide-1588-layer-3" 
                                data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['525','525','525','425','330']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                
                            </div>
                        </div>
                    </li>
      
                  @endforeach
                </ul>


            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Book A Table Area =================-->
        <section class="book_table_area">
            <div class="container">
                <div class="book_table_inner row m0">
         
@php
$category=DB::table('categories')->get();
@endphp               
           
               <div class="row explor_room_item_inner">
        
        @foreach($category as $row)
              <div class="col-md-4 col-sm-3">
                <a href="{{route('category.wish',$row->id)}}">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('public/backend/media/category/'.$row->image) }}" height="300px;"
                     width="300px;" alt="Card image cap">
                    <div class="card-body">
                 
                      
                      <a href="{{route('category.wish',$row->id)}}" class="btn btn-primary">{{$row->category_name}}</a>
                    </div>
                  </div>
              </a>
               </div>

          @endforeach
               </div>

                    
                </div>
            </div>
        </section>


   
        <!--================End Book A Table Area =================-->
        

        <!--================End Introduction Area =================-->
        
        <!--================Explor Room Area =================-->






        <section class="explor_room_area">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="pull-left">
                        <div class="left_ex_title">
                            <h2> Our <span>rooms</span></h2>
                            <p>choose room according to budget</p>
                        </div>
                    </div>



                    <div class="pull-right">
                        <a class="about_btn_b" href="{{route('all.room')}}">view all rooms</a>
                    </div>
                </div>
                <div class="row explor_room_item_inner">
                     @foreach($all_room as $row)
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
        <!--================End Explor Room Area =================-->
        
        <!--================Our Service Area =================-->
        <section class="our_service_area">
            <div class="container">
                <div class="row our_service_inner">
                    <div class="col-md-3 col-sm-6">
                        <div class="our_service_first">
                            <h3>our services</h3>
                            <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
                            <a class="all_s_btn" href="#">view all services</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="our_service_item">
                            <i class="flaticon-wifi"></i>
                            <h4>Free wifi</h4>
                            <p>Incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Utad minima.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="our_service_item">
                            <i class="flaticon-toaster"></i>
                            <h4>Breakfast</h4>
                            <p>Incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Utad minima.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="our_service_item">
                            <i class="flaticon-taxi"></i>
                            <h4>Breakfast</h4>
                            <p>Incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Utad minima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->
        
        <!--================Our Resort Gallery Area =================-->

        <!--================End Our Resort Gallery Area =================-->
        
        <!--================Client Testimonial Area =================-->

        <!--================End Client Testimonial Area =================-->
        

        <!--================End Latest News Area =================-->
        
        <!--================Video Area =================-->
  
        <!--================End Video Area =================-->
        
        <!--================Fun Fact Area =================-->
    

@endsection       