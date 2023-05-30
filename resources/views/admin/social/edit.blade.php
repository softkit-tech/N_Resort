@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Social Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Social Add <a href="{{route('all.social')}}" class="btn btn-success btn-sm pull-right">All Social</a></h6>
          <p class="mg-b-20 mg-sm-b-30">New Social add form</p>

                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <form action="{{route('update.social',$edit_data->id)}}" method="post" enctype="multipart/form-data">
          	@csrf
       
          <div class="form-layout">
            <div class="row mg-b-25">
     
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Social Icon: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="icon" value="{{$edit_data->icon}}" >
                </div>
              </div><!-- col-4 -->

               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Social Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="link" value="{{$edit_data->link}}" >
                </div>
              </div><!-- col-4 -->

            
            </div><!-- row -->
            <br><hr>
           
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->




@endsection
