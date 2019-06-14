@extends('base')
@section('content')

            <!-- Content Column -->
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Tim</h6>
                </div>
                <div class="card-body">
                	<form role="form" action="/tim/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                		<div class="form-group row">
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_tim" placeholder="Nama Tim">
                  </div>
              </div>	
              <div class="form-group row">
                  <div class="col-sm-8">
                  	<input type="file" class="form-control" name="logo">
                  </div>
                </div>
                <div class="form-group row">
                	<input type="submit" class="btn btn-info" value="Upload">
                </div>
                	</form>
                </div>
            </div>
    	
@endsection