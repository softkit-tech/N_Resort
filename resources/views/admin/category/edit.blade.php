@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Category Section</span>
      </nav>
      <div class="sl-pagebody">
           <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Category Add <a href="{{route('all.category')}}" class="btn btn-success btn-sm pull-right">All Category</a></h6>

            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <p class="mg-b-20 mg-sm-b-30">New Category add form</p>
          <form action="{{route('update.category',$edit_data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> Category Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="category_name" value="{{$edit_data->category_name}}" >
                </div>
              </div><!-- col-4 -->





              <div class="col-lg-4">
                <lebel>Image Category <span class="tx-danger">*</span></lebel>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);">
                <span class="custom-file-control"></span>
               <img src="#" id="one" >
              </label>
             	<img id="logo" src="{{asset('public/backend/media/category/'.$edit_data->image) }}" width="50" height="50;" />
                  
              </div>

     
            
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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>


<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection
