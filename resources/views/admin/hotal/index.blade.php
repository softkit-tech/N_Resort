@extends('admin.admin_layouts')
@section('admin_content')

<div class="sl-mainpanel">
       <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Hotal Table</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Hotal List
          	    <a href="{{route('add.hotal')}}" class="btn btn-success btn-sm pull-right">Add Hotal</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Room Numnber</th>
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-15p">Room Title</th>
                  <th class="wd-15p">Room Rate</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-15p">Image</th>
                 
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($all_room as $row)
                <tr>
                  <td>{{$row->room_number}}</td>
                  <td>{{$row->category_name}}</td>
                  <td>{{$row->room_title}}</td>
                  <td>{{$row->room_rate}}</td>
                  <td>@if($row->status==1)
                <span class="badge badge-success">Active</span>

                    	@else
                    	<span class="badge badge-danger">Inactive</span>
                    	@endif

                  </td>

                  	<td>
                     @foreach($productimage as $image)
                    @if($row->id==$image->hotal_id)   <img src="{{asset($image->image)}}" height="50" width="50px" />
                    @endif
                  @endforeach
                    </td>
           
                   
                   
                  
                  
                  <td>
                    <a href="{{route('edit.hotal',$row->id)}}" class="btn btn-sm btn-info"
                  title="edit"><i class="fa fa-edit"></i></a>

                    <a href="{{route('delete.hotal',$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="delete"><i class="fa fa-trash"></i></a>

          
                   
                    
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