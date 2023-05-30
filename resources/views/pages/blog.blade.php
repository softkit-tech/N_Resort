@extends('layouts.app')

@section('content')



    <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Blog Pages</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>
    

     <section class="blog_details_area">
         <div class="container">
             <div class="row">
                 <div class="col-md-9 pull-right">
                     <div class="blog_listing_inner">
                        @foreach($list_blog as $row)
                         <div class="blog_item">
                             <a href="#" class="blog_img">
                                 <img src="{{asset('public/backend/media/blog/'.$row->image) }}" alt="">
                             </a>
                             <div class="blog_text">
                                 <a href="blog-details.html"><h4>{{$row->title}}</h4></a>
                                 <ul>
                                    
                                     <li><a href="#">{{$row->date}}</a></li>
                                     
                                 </ul>
                                 <p>{{$row->detail}}...</p>
                                <!--  <a class="book_now_btn" href="blog-details.html">Read more</a> -->
                             </div>
                         </div>
                     
                    
                       @endforeach
                     </div>
                 </div>

@php
$post_category=DB::table('post_categories')->get();
@endphp                 
                 <div class="col-md-3 pull-right">
                     <div class="sidebar_area">
             
                         <aside class="r_widget categories_widget">
                             <div class="r_widget_title">
                                 <h3>Categories</h3>
                             </div>
                             <ul>
                                @foreach($post_category as $row)
                                 <li><a href="{{route('blog.wish',$row->id)}}">{{$row->postcategory}} <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                 @endforeach
                             </ul>
                         </aside>
                 
               
                     </div>
                 </div>
             </div>
         </div>
     </section>

@endsection