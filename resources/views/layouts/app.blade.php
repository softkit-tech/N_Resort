<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2021 01:51:13 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>HillTown Resort</title>
        <meta name="csrf" value="{{ csrf_token() }}">

        <!-- Icon css link -->
        <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/stroke-icon/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('public/frontend/vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/animate-css/animate.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('public/frontend/vendors/magnify-popup/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/bootstrap-selector/bootstrap-select.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/lightbox/simpleLightbox.css')}}" rel="stylesheet">
        
        <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

        
    </head>
    <body>

        @php
      $setting=DB::table('logos')->first();
        @endphp

        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#"><i class="fa fa-phone"></i>+ 01621766755</a>
                            <a href="#"><i class="fa fa-envelope-o"></i>softkittechnology@gmail.com</a>
                        </div>

@php
$social=DB::table('socials')->get();
@endphp                        
                        <div class="pull-right">
                            <ul class="header_social">
                                @foreach($social as $row)
                                <li><a href="{{$row->link}}"><i class="{{$row->icon}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{asset('public/backend/media/logo/'.$setting->image) }}" alt="">
                                <img src="{{asset('public/backend/media/logo/'.$setting->image) }}" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
              <!--                   <li class="dropdown submenu active">
                                    <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                 
                                </li> -->
                                  <li><a href="{{url('/')}}">Home</a></li>
                     <!--            <li class="submenu dropdown">
                                    <a href="{{route('all.room')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                           
                                </li> -->  <li><a href="{{route('all.room')}}">All Room</a></li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
             
                                
                                        <li><a href="{{url('register')}}">Register</a></li>
                                        <li><a href="{{url('login')}}">Login</a></li>
                                     
                                    </ul>
                                </li>
                           <!--      <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                 
                                </li> -->
                                <li><a href="{{route('blog.list')}}">Blog</a></li>
                                <li><a href="{{route('about.us')}}">About Us</a></li>
                                <li><a href="{{route('contact.us')}}">Contact Us</a></li>

                            @guest

                                 @else

                                <li><a href="{{route('booking.list')}}">Booking List</a></li>
                             @endguest



                            </ul>
                       
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Slider Area =================-->


 
 
      @yield('content')


     
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>1, Mirpur dhaka </h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>01621766755</h4>
                                        </div>
                                    </div>
                                </div>
                        
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Extra Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  About Us</a></li>
                                    <li><a href="#">-  Faq’s</a></li>
                                    <li><a href="#">-  Blog</a></li>
                                    <li><a href="#">-  Testimonials</a></li>
                                    <li><a href="#">-  Reservation Now</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>our services</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  Food & Drinks</a></li>
                                    <li><a href="#">-  Rooms</a></li>
                                    <li><a href="#">-  Amenities</a></li>
                                    <li><a href="#">-  Spa & Gym</a></li>
                                    <li><a href="#">-  Hill Tours</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget instagram_widget">
                                <div class="f_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="instagram_list" id="instafeed"></ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="pull-left">
                        <h4>Copyright © HillTown Resort  <script>document.write(new Date().getFullYear());</script>. All rights reserved. </h4>
                    </div>
                    <div class="pull-right">
                        <h4>Created by: <a href="https://www.softkittechnology.com/" target="_blank">Soft Kit Technology</a></h4>
                    </div>
                </div>
            </div>
        </footer>

        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('public/frontend/js/jquery-2.2.4.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <!-- Rev slider js -->
        <script src="{{asset('public/frontend/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        
        <script src="{{asset('public/frontend/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/counterup/waypoints.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/bootstrap-selector/bootstrap-select.js')}}"></script>
<!--        <script src="vendors/lightbox/js/lightbox.min.js"></script>-->
        <script src="{{asset('public/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="{{asset('public/frontend/vendors/instafeed/instafeed.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontend/vendors/instafeed/script.js')}}"></script>
        
        <script src="{{asset('public/frontend/js/theme.js')}}"></script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

            <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
            <script>
                @if(Session::has('messege'))
                  var type="{{Session::get('alert-type','info')}}"
                  switch(type){
                      case 'info':
                           toastr.info("{{ Session::get('messege') }}");
                           break;
                      case 'success':
                          toastr.success("{{ Session::get('messege') }}");
                          break;
                      case 'warning':
                         toastr.warning("{{ Session::get('messege') }}");
                          break;
                      case 'error':
                          toastr.error("{{ Session::get('messege') }}");
                          break;
                  }
                @endif
             </script> 
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2021 01:51:32 GMT -->
</html>