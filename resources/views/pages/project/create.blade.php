@extends('layouts.default')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Tambah Project</h6>
    </div>
    <div class="card-body">
            <form>
            <div class="form-group">
            <label for="formGroupExampleInput" class="font-weight-bold">Nama Project</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Pekerjaan">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2" class="font-weight-bold">Vendor</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Vendor">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" class="font-weight-bold">Customer</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Customer">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;
            </div>

            </form>
    </div>
</div>

@endsection