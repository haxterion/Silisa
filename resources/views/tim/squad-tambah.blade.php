@extends('base')
@section('content')

            <!-- Content Column -->
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Tim</h6>
                </div>
                <div class="card-body">
                	<form role="form" action="/tim/squadstore" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                		<div class="form-group row">
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Pemain">
                  </div>
              </div>	
              <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="number" class="form-control" name="no_punggung" placeholder="No Punggung">
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-8">
                    <select class="selectpicker" data-live-search="true" name="tim">
                      @foreach($tim as $t)
                      <option value="{{$t->id}}">{{$t->nama_tim}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <input type="submit" class="btn btn-info" value="Kirim">
                </div>
                </div>
                	</form>
                </div>
            </div>
    	
@endsection