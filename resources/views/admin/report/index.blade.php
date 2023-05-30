@extends('admin.admin_layouts')
@section('admin_content')

<div class="sl-mainpanel">
       <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Booking Table</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Booking  List

          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">Customer Name</th>
                  <th class="wd-15p">Customer Phone</th>
                  <th class="wd-15p">Room Number</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($all_report as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->phone}}</td>
                  <td>{{$row->room_number}}</td>

                   
                   
                  
                  
                  <td>
                    <a href="{{route('report.single',$row->id)}}" class="btn btn-sm btn-info"
                  title="edit"><i class="fa fa-edit"></i></a>

                    <a href="" class="btn btn-sm btn-danger" id="delete" title="delete"><i class="fa fa-trash"></i></a>

          
                   
                    
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