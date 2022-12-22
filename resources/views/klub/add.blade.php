@extends('mylayout.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Klub</h1>
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Klub</h6>
        </div>
        <div class="card-body">
            @if (session('msg'))
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Terjadi Kesalahan</strong> {{ session('msg') }}
            </div>
            @endif
            <form method="POST" action="{{ route('insert-klub') }}">
              @csrf
              <div class="form-group">
                <label>Nama Klub</label>
                <input type="text" class="form-control" placeholder="Klub Name" name="nama">
              </div>
              <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" placeholder="Kota" name="klub_kota">
              </div>
              <button type="submit" class="btn btn-success mb-2 float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
