
@extends('backend.layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ Table</h1>
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
                          <h3 class="card-title">All FAQ</h3>
                          <button class="btn btn-info btn-sm" style="float: right" data-toggle="modal" data-target="#modal-default"> + Add FAQ</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Faq Questions</th>
                                    <th>Faq Answers</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($faq_view as $key=>$row)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{ $row->faq_questions ?? '' }}</td>
                                        <td>{{ Str::of($row->faq_answers ?? '')->limit(30) }}</td>
                                       
                                        
                                        <td>
                                          @if ($row->status == '1')
                                         
                                          <a href="{{ route('faq.status',$row->id) }}" class="btn btn-success btn-xs" style="width:100px;"> Active </a>
                                          @else
                                         
                                          <a href="{{ route('faq.status',$row->id) }}" class="btn btn-primary btn-xs" style="width:100px;"> Deactive </a>
                                          @endif
                                      </td>
                                       
                                        <td>
                                            
                                            <a href="#" class="btn btn-primary btn-sm View" title="View Data"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-info btn-sm edit" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('faq.delete',$row->id) }}" id="delete" class="btn btn-danger btn-sm delete" title="Delete Data"><i class="fas fa-trash-alt"></i></a>
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
              <h4 class="modal-title">Insert FAQ</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('faq.store') }}" method="post">
                    @csrf

                    <div class="card-body">

                        

                        <div class="form-group">
                            <label for="">FQA Question <span class="text-danger">*</span></label>
                            <input type="text" name="faq_questions" class="form-control" value="{{old('faq_questions')}}" placeholder="FQA Question ">
                            @error('faq_questions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">FQA Answer <span class="text-danger">*</span></label>
                            <textarea name="faq_answers" id="summernote" class="summernote" cols="30" rows="10" placeholder="FQA Answer "></textarea>
                            @error('faq_answers')
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