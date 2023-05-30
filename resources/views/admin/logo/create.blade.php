@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Logo Section</span>
      </nav>
      <div class="sl-pagebody">
           <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Logo Add <a href="{{route('all.logo')}}" class="btn btn-success btn-sm pull-right">All Logo</a></h6>

            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <p class="mg-b-20 mg-sm-b-30">New Logo add form</p>
          <form action="{{route('store.logo')}}" method="post" enctype="multipart/form-data">
            @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
          





              <div class="col-lg-4">
                <lebel>Logo Site <span class="tx-danger">*</span></lebel>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);">
                <span class="custom-file-control"></span>
               <img src="#" id="one" >
              </label>

                  
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
