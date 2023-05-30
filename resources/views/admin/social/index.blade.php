@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
       <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Social  Table</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Social  List
          	    <a href="{{route('add.social')}}" class="btn btn-success btn-sm pull-right">Add Social </a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Social Icon</th>
                  <th class="wd-15p">Social Link</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($all_social as $row)
                <tr>
                  <td>{{$row->icon}}</td>
                  <td>{{$row->link}}</td>
            
                 
              
                  <td>
                    <a href="{{URL::to('edit/social/'.$row->id)}}" class="btn btn-sm btn-info"
                  title="edit"><i class="fa fa-edit"></i></a>

                    <a href="{{URL::to('delete/social/'.$row->id)}}" class="btn btn-sm btn-danger"  id="delete"><i class="fa fa-trash"></i></a>

                  
                   
                    
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