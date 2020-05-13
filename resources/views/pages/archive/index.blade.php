@extends('layouts.default')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Filter Dokumen</h6>
  </div>
  <div class="card-body">

    <form>
      <div class="form-row align-items-center">
        <div class="col-auto">
          <label class="sr-only" for="inlineFormInput">Name</label>
          <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
        </div>
        <div class="col-auto">
          <label class="sr-only" for="inlineFormInputGroup">Username</label>
          <div class="input-group mb-2">
         
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
          </div>
        </div>
      
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Dokumen Project</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Project</th>
              <th>Kategori Dokumen</th>
              <th>Nama Dokumen</th>
              <th>Uploader</th>
              <th>Tgl Upload</th>
              <th>Option</th>
            
              </tr>
          </thead>

          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($archives as $archive)
                          
            <tr>
            <td>{{$no++}}</td>
            <td>{{$archive->project->name}}</td>
            <td>{{$archive->category->name}}</td>
            <td>{{$archive->name}}</td>
            <td>{{$archive->user->name}}</td>
            <td>{{$archive->created_at}}</td>
           <td>
            <div class="btn-group-vertical">
              <div class="btn-group mr-2" role="group" aria-label="First group">
              <a href="{{route('archive.show', $archive->id)}}" class="btn btn-sm btn-info">
                  <i class="fas fa-eye"></i>
                </a>
                <button type="button" class="btn btn-sm btn-primary">
                  <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="btn btn-sm btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
               
              </div>
            </div>
           </td>
           
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection

@push('scripts')

      <!-- Page level plugins -->
<script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
<script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
@endpush

@push('style')
<link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush