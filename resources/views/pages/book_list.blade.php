@extends('layouts.app')

@section('content')



    <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Booking List</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>


   
   <div class="container">
   <h1>Booking List </h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Room Number</th>
                <th scope="col">Room Title</th>
                <th scope="col">Room Rate</th>
               
              </tr>
            </thead>
            <tbody>

              @foreach($book_list as $row)
              <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->room_number}}</td>
                <td>{{$row->room_title}}</td>
                <td>{{$row->room_rate}}</td>
           <!--      <td>
                  <a href="{{route('view.booking',$row->id)}}" class="btn btn-info">View</a>
                </td> -->
              </tr>
         @endforeach
            </tbody>
          </table>


</div>

        @endsection