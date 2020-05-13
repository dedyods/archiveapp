@extends('layouts.default')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Upload Archive</h6>
    </div>
    <div class="card-body">
        <form action="{{route('archive.store')}}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="formGroupExampleInput" class="font-weight-bold">Project</label>
           <select name="project" id="project" class="form-control" @error ('project') is-invalid @enderror>
                <option value="0">-- Pilih Project --</option>
                @foreach ($projects as $project)
            <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
            </select>
            @error('project')
          <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
            <label for="formGroupExampleInput2" class="font-weight-bold">Kategori Dokumen</label>
            <select name="category" id="category" class="form-control" @error ('category') is-invalid @enderror>
                <option value="0">-- Kategori Dokumen --</option>
                @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
          <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" class="font-weight-bold">Nama Dokumen</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Nama Customer">
            </div>

            <div class="form-group">
                <label class="control-label font-weight-bold" >Upload File</label>
                <input class="form-control @error('file') is-invalid @enderror" name="file" type="file">
    
                @error('file')
              <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;
            </div>

            </form>
    </div>
</div>

@endsection