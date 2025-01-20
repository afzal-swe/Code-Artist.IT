{{-- $table->string('managerial_panel')->nullable()->default(1);
$table->string('full_time_employee')->nullable()->default(2);
$table->string('project_based_employee')->nullable()->default(3);
$table->string('intern')->nullable()->default(4); --}}



@extends('backend.layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service Areas Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin_home') }}"><- Go To Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">All Service Areas</h3>
                          <button class="btn btn-info btn-sm" style="float: right" data-toggle="modal" data-target="#modal-default"> + Add New People</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>People Panel</th>
                                    <th>FB Link</th>
                                    <th>Linkedin Link</th>
                                    <th>Instragram Link</th>
                                    <th>website Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($people_panel as $key=>$row)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td><img src="{{ asset($row->image) }}" style="height: 40px; width:60px"></td>
                                        <td>{{$row->name ?? ''}}</td>
                                        <td>{{$row->designation ?? ''}}</td>
                                        
                                        <td>
                                          @if ($row->people_anel == 1)
                                            <p style="width:150px;"> Advisory Panel </p>
                                          @elseif ($row->people_anel == 2)
                                            <p style="width:150px;"> Managerial Panel </p>
                                          @elseif ($row->people_anel == 3)
                                            <p style="width:150px;"> Full Time Empolyee </p>
                                          @elseif ($row->people_anel == 4)
                                            <p style="width:150px;"> Project Based Empolyee </p>
                                          @elseif ($row->people_anel == 5)
                                            <p style="width:150px;"> Intern </p>
                                          @endif
                                        </td>

                                        

                                        <td>
                                          @if ($row->facebook)
                                          <p class="text-success" style="width:100px;"> Active </p>
                                          @else
                                          <p class="text-denger" style="width:100px;"> Null </p>
                                          @endif
                                        </td>
                                        <td>
                                          @if ($row->linkdin)
                                          <p class="text-success" style="width:100px;"> Active </p>
                                          @else
                                          <p class="text-danger" style="width:100px;"> Null </p>
                                          @endif
                                        </td>
                                        <td>
                                          @if ($row->instragram)
                                          <p class="text-success" style="width:100px;"> Active </p>
                                          @else
                                          <p class="text-danger" style="width:100px;"> Null </p>
                                          @endif
                                        </td>
                                        <td>
                                          @if ($row->website)
                                          <p class="text-success" style="width:100px;"> Active </p>
                                          @else
                                          <p class="text-danger" style="width:100px;"> Null </p>
                                          @endif
                                        </td>
                                        
                                        <td>
                                          @if ($row->status == '1')
                                          
                                          <a href="{{ route('people_panel.status',$row->id) }}" class="btn btn-success btn-xs" style="width:100px;"> Active </a>
                                          @else
                                          
                                          <a href="{{ route('people_panel.status',$row->id) }}" class="btn btn-primary btn-xs" style="width:100px;"> Deactive </a>
                                          @endif
                                      </td>
                                       
                                        <td>
                                            
                                            <a href="#" class="btn btn-info btn-sm edit" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('people_panel.delete',$row->id) }}" id="delete" class="btn btn-danger btn-sm delete" title="Delete Data"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
    </section>
  </div>

{{-- Category Added Modal --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Insert New People</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('people_panel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        

                        <div class="form-group">
                            <label for="">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Full Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Designation <span class="text-danger">*</span></label>
                            <input type="text" name="designation" class="form-control" value="{{old('designation')}}" placeholder="Designation">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                          <div class="form-group col-lg-12">
                            <label for="exampleInputFile">People Panel<span class="text-danger">*</span></label>
                            <select name="people_anel" id="" class="form-control">
                              <option value="0" selected disabled>== Choose Options ==</option>
                                
                                <option value="1">Advisory Panel</option>
                                <option value="2">Managerial Panel</option>
                                <option value="3">Full Time Empolyee</option>
                                <option value="4">Project Based Empolyee</option>
                                <option value="5">Intern</option>
                                
                            </select>
                            @error('people_anel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        
                        </div>

                        <div class="form-group">
                          <label for="">Facebook</label>
                          <input type="text" name="facebook" class="form-control" value="{{old('facebook')}}" placeholder="Facebook Link">
                        </div>

                        <div class="form-group">
                          <label for="">Linkdin</label>
                          <input type="text" name="linkdin" class="form-control" value="{{old('linkdin')}}" placeholder="Linkdin Link">
                        </div>

                        <div class="form-group">
                          <label for="">Instragram</label>
                          <input type="text" name="instragram" class="form-control" value="{{old('instragram')}}" placeholder="Instragram Link">
                        </div>

                        <div class="form-group">
                          <label for="">Website</label>
                          <input type="text" name="website" class="form-control" value="{{old('website')}}" placeholder="Website Link">
                        </div>

                        <div class="form-group">
                            <label for="">People Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                          <div class="form-group col-lg-12">
                            <label for="exampleInputFile">Status<span class="text-danger">*</span></label>
                            <select name="status" id="" class="form-control">
                              <option value="0" selected disabled>== Choose Options ==</option>
                                
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                                
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        
                        </div>
   
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>

      <script>
        $(function () {
          //Initialize Select2 Elements
          
      
          $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
          })
      
        })
        
      </script>

@endsection