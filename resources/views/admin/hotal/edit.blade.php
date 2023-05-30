@extends('admin.admin_layouts')

@section('admin_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Room  Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Room Add <a href="{{route('all.hotal')}}" class="btn btn-success btn-sm pull-right">All Room</a></h6>
          <p class="mg-b-20 mg-sm-b-30">New Room add form</p>
          <form action="{{route('update.hotal',$edit_data->id)}}" method="post" enctype="multipart/form-data">
          	@csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">

              @php
              $category=DB::table('categories')->get()
              @endphp   

     <div class="col-lg-4">
   <div class="form-group mg-b-10-force">
     <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
     <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
       <option label="Choose Category"></option>
       @foreach($category as $row)
       <option value="{{ $row->id }}"  <?php if ($row->id == $edit_data->category_id) {
                      echo "selected";
                    } ?>>{{ $row->category_name }}</option>
       @endforeach
     </select>
   </div>
 </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="room_title" value="{{$edit_data->room_title}}" >
                </div>
              </div><!-- col-4 -->



                            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Room Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="room_number" value="{{$edit_data->room_number}}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Status : <span class="tx-danger">*</span></label>
                  <select class="form-control" name="status">
                    <option value="1" {{($edit_data->status=="1")?"selected":""}}>Active</option>
                    <option value="0" {{($edit_data->status=="0")?"selected":""}}>Inactive</option>
                  </select>
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Room Details: <span class="tx-danger">*</span></label>
                <textarea class="form-control" name="room_details">
                	{{$edit_data->room_details}}
                </textarea>
                </div>
              </div><!-- col-4 -->
   
   

         

            
      <div class="col-lg-4">
      <div class="form-group">
        <label class="form-control-label">Image One: <span class="tx-danger">*</span></label>
        <input class="form-control" type="file" name="image[]" id="image"  required="">
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
            <br><hr>
          <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                          <label for="image"> Old Product Image <span>*</span></label>

                          

                           
                            @foreach($productimage as $image)
                               @if($edit_data->id==$image->hotal_id) 
                                <div class="edit-img">
                                  <input type="hidden" class="form-control" value="{{$image->id}}" name="hidden_img">
                                 <img src="{{asset($image->image)}}" width="100"> 
                                  <a href="{{route('image.delete',$image->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                               @endif
                            @endforeach
                          @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
     
        

            <br><br><hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update</button>
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
