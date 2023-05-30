@extends('layouts.app')

@section('content')



    <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contact Us</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>


        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-6">
                        <div class="left_ex_title">
                            <h2>get in <span>touch</span></h2>
                        </div>
                        <form class="contact_us_form row m0" action="{{route('contact.store')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phoen no." required="">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="right_contact_info">
                            <div class="contact_info_title">
                                <h3>Contact info</h3>
                                <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
                            </div>
                            <div class="contact_info_list">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Office</h4>
                                        <p>Hill Town Resort, 215, Mallin Street <br /> New Youk, NY 100 254</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <a href="#">info@hilltown.contact.com</a>
                                        <a href="#">support@hilltown.com</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <a href="#">1800 658 4778</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact_map_area">
            <div class="container">
                <div id="mapBox2" class="mapBox2 row m0" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="12" 
                    data-marker="img/map-marker.png" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
            </div>
        </section>



@endsection