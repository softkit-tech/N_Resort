@extends('layouts.app')

@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!-- <style type="text/css">
  .hidden{
    display: none;
  }
</style> -->

 <script type="text/javascript">
  function showHide(){
    var radio = document.getElementById("chk");
     var hiddeninput =document.getElementsByClassName("hidden");

    for(var i =0 ; i !=hiddeninput.lenght; i++){
      if (radio.checked) {
        hiddeninput[i].style.display= "inline";
      }
    }
  }
</script>

    <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Final Step</h3>
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>

      <form action="{{route('booking.done')}}" method="post">
      @csrf  

                <section class="explor_room_area">
            <div class="container">
  
                <div class="row explor_room_item_inner">
       
                    <div class="col-md-4 col-sm-8">
                     
      <table class="table">
  <thead>
    <tr>

   <th>Room Number</th>
   <th>Room Name</th>
   <th> Room Rate</th>
   <th>NIgt</th>
   
   <th>Total </th>
 </tr>
  </thead>
  <tbody>

    @foreach($cart as $row)
    <tr>
     
      <td>{{ $row->options->room_number }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->price }}</td>
      <td>

       {{$row->qty}}
       <input type="hidden" name="qty" value="{{$row->qty}}">
        
    
      </td>
      <td>{{ $row->price * $row->qty }}</td>
       <input type="hidden" name="total" value="{{$row->Cart::subtotal()}}">
    </tr>
 @endforeach

  </tbody>
</table>
<h1>Total Amount :TK  {{ Cart::Subtotal() }}</h1>
                       
                    </div>


                    <div class="col-md-4 col-sm-4">
                     
                     
                      <form>
                       <div class="form-group">
                       <label for="exampleInputPassword1">Adult Person </label>
                       <input type="text" class="form-control" name="adult" placeholder="Adult Person">
                         </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Child Person</label>
                          <input type="text" class="form-control" name="child"  placeholder="Child Person">
                        </div>
                             <div class="form-group">
                          <label for="exampleInputPassword1">Arrival Date</label>
                          <input type="date" class="form-control" name="arrival_date"  placeholder="Password">
                        </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Arrival Time</label>
                          <input type="text" class="form-control" name="arrival_time"  placeholder="Arrival Time">
                        </div>

                                    <div class="form-group">
                          <label for="exampleInputPassword1">Department Date</label>
                          <input type="date" class="form-control" name="department_date" placeholder="Department Date ">
                        </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Department Time</label>
                          <input type="text" class="form-control" name="department_time"  placeholder="Department Time">
                        </div>

            <div class="form-group">
                 <ul class="logos_list" >
                   <li><input type="radio" name="payment_type" value="Handcash">Handcash</li>

                      <li><input type="radio" name="payment_type" value="Bkash" id="chk" onclick="showHide()">Bkash</li> 
                       <label class="hidden">Baksh  Number :1740125203</label><br>
                       <label class="hidden">Transtion Id </label> 
                       <input type="text" class="form-control"  placeholder="Tranction Id" name="tranction_id" >
                         <label class="hidden">Bkash Number </label> 
                        <input type="text"  class="form-control" placeholder="Bkash Number" name="bkash_number">
                       

                  </ul>
             </div>
                   
                        <button type="submit" class="btn btn-primary">Final Book</button>
                      </form>
                       
                    </div>
                
                </div>
            </div>
        </section>
     </form>




    @endsection