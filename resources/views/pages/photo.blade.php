@extends('layouts.app')
@section('content')

<section>
        <div class="container">
            <div class="row mt-5 mx-0">
                <div class="col-lg-12">
                    <div class="gallary text-center">
                        <h2>PHOTO GALLERY</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallary">
                        <div class="row">
                        	@foreach($all_photo as $row)
                            <div class="col-lg-4">
                                <div class="gallaryimg-main">
                                    <div class="gallaryright~/assets/image">

                                        <a class="venobox" data-gall="gallery01" href="{{asset('public/backend/media/gallary/'.$row->image) }}"><img src="{{asset('public/backend/media/gallary/'.$row->image) }}" alt="" class="img-fulid w-100"></a>
                                       <p>{{$row->title}}</p>
                                    </div>

                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
@endsection