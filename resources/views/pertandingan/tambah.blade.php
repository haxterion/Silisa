@extends('base')
@section('content')

            <!-- Content Column -->
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pertandingan</h6>
                </div>
                <div class="card-body">
                  @foreach($tim as $t)
                	<form role="form" action="/pertandingan/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                		<div class="form-group row">
                  <div class="col-sm-6">
                    <label>Tim Tuan Rumah</label>
                    <input type="text" name="tim_a" hidden="" value="{{$t->id}}">
                    <input type="text" name="tim" class="form-control"  value="{{$t->nama_tim}}" disabled="">
                  </div>	
                  <div class="col-sm-6">
                    <label>Tim Tamu</label>
                    <select class="selectpicker" data-live-search="true" name="tim_b">
                      @foreach($timtamu as $ti)
                      <option value="{{$ti->id}}">{{$ti->nama_tim}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-6">
                    <label>Skor Tim A</label>
                    <input type="number" class="form-control" name="skor_tim_a" placeholder="Skor Tim A">
                  </div>
                  <div class="col-sm-6">
                    <label>Skor Tim B</label>
                    <input type="number" class="form-control" name="skor_tim_b" placeholder="Skor Tim b">
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <input type="submit" class="btn btn-info" value="Kirim">
                </div>
                </div>
                	</form>
                  @endforeach
                </div>
            </div>
    	
@endsection