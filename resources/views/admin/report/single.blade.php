@extends('admin.admin_layouts')

@section('admin_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Single Booking  Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
        
        
       
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Customer Name: <span class="tx-danger">*</span></label>
                  
                  {{$single_view->name}}
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Customer Email: <span class="tx-danger">*</span></label>
                  
                  {{$single_view->email}}
                </div>
              </div><!-- col-4 -->



                            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Customer Number: <span class="tx-danger">*</span></label>
                  {{$single_view->phone}}
                </div>
              </div><!-- col-4 -->


                            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Number: <span class="tx-danger">*</span></label>
                  {{$single_view->room_number}}
                </div>
              </div><!-- col-4 -->

               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Title: <span class="tx-danger">*</span></label>
                  {{$single_view->room_title}}
                </div>
              </div><!-- col-4 -->

               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Detail: <span class="tx-danger">*</span></label>
                  {{$single_view->detail}}
                </div>
              </div><!-- col-4 -->

               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Rate: <span class="tx-danger">*</span></label>
                  {{$single_view->room_rate}}
                </div>
              </div><!-- col-4 -->


                        <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Arrival Date: <span class="tx-danger">*</span></label>
                  {{$single_view->arrival_date}}
                </div>
              </div><!-- col-4 -->


             
                       <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Arrival Time: <span class="tx-danger">*</span></label>
                 {{$single_view->arrival_time}}
               </div>
             </div><!-- col-4 -->


                     <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Department Date: <span class="tx-danger">*</span></label>
                 {{$single_view->department_date}}
               </div>
             </div><!-- col-4 -->

                     <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Department Time: <span class="tx-danger">*</span></label>
                 {{$single_view->department_time}}
               </div>
             </div><!-- col-4 -->
      

                               <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Payment Type: <span class="tx-danger">*</span></label>
                 {{$single_view->payment_type}}
               </div>
             </div><!-- col-4 -->


                             <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Transtion Id: <span class="tx-danger">*</span></label>
                 {{$single_view->tranction_id}}
               </div>
             </div><!-- col-4 -->

                             <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Bkash Number: <span class="tx-danger">*</span></label>
                 {{$single_view->bkash_number}}
               </div>
             </div><!-- col-4 -->





   

         

            


 
     
        

            <br><br><hr>
            <div class="form-layout-footer">
              <a href="{{route('report.list')}}" class="btn btn-info mg-r-5" type="submit">All Report</a>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>






@endsection
