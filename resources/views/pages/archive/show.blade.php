@extends('layouts.default')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Dokumen</h6>
    </div>
    <div class="card-body">
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
              <tr>
               
                <td scope="col">Project</td>
              <td scope="col">{{$archive->project_id}}</td>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col">First</td>
                <td scope="col">Last</td>
              </tr>
            </tbody>
          </table>                   
    </div>
    <div class="col">
     <a href="{{$archive->getFiles()}}" download=" {{$archive->getFiles()}}">
    download
    </a>
    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=http://localhost:8000/storage/111.pdf" frameborder="no" style="width:100%;height:500px"></iframe>

    {{-- {{asset('storage/1.doc')}} --}}
    </div>
  
  </div>

    </div>
</div>
@endsection

