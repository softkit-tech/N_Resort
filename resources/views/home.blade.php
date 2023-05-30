@extends('layouts.app')

@section('content')

    <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Register  Page</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
