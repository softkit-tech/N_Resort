@extends('admin.admin_layouts')
@section('admin_content')

<div class="sl-mainpanel">
       <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blog Table</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Blog List
          	    <a href="{{route('add.blog')}}" class="btn btn-success btn-sm pull-right">Add Blog</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Post Category</th>
                  <th>Image</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($all_blog as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->title}}</td>
                  <td>{{$row->postcategory}}</td>
             
                  	<td>
                    	<img id="logo" src="{{asset('public/backend/media/blog/'.$row->image) }}" width="50" height="50;" />
                    </td>
                   
                   
                  
                  
                  <td>
                    <a href="{{route('edit.blog',$row->id)}}" class="btn btn-sm btn-info"
                  title="edit"><i class="fa fa-edit"></i></a>

                    <a href="{{route('delete.blog',$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="delete"><i class="fa fa-trash"></i></a>

          
                   
                    
                  </td>
                 
                </tr>
         @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
  </div>
@endsection