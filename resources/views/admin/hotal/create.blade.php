@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Room Section</span>
      </nav>
      <div class="sl-pagebody">
           <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Room Add <a href="{{route('all.hotal')}}" class="btn btn-success btn-sm pull-right">All Room</a></h6>

            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <p class="mg-b-20 mg-sm-b-30">New Room add form</p>
          <form action="{{route('store.hotal')}}" method="post" enctype="multipart/form-data">
            @csrf
          
@php
$category=DB::table('categories')->get()
@endphp          
          <div class="form-layout">
            <div class="row mg-b-25">
                  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
             

                            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="room_title" placeholder="Room Title " required="">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="room_number" placeholder="Room Number " required="">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Detail: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="detail" placeholder="Detail" required="">
                </div>
              </div><!-- col-4 -->

                            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Day System: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="perday" placeholder="Day System" required="">
                </div>
              </div><!-- col-4 -->
                               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Childen: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="childen" placeholder="Childen" required="">
                </div>
              </div><!-- col-4 -->
                               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Adult: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="adult" placeholder="Adult" required="">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Status : <span class="tx-danger">*</span></label>
                  <select class="form-control" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                </div>
              </div><!-- col-4 -->


                          <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Rate: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="room_rate" placeholder="Room Rate" required="">
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Room Details: <span class="tx-danger">*</span></label>
                <textarea class="form-control" name="room_details">
                	
                </textarea>
                </div>
              </div><!-- col-4 -->


                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image[]" id="image" >
                </div>
              </div><!-- col-4 -->
                      <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image[]" id="image" >
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image[]" id="image" >
                </div>
              </div><!-- col-4 -->


   




     
            
            </div><!-- row -->
            <br><hr>
           
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->







@endsection
