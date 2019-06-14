@extends('base')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertandingan Terbaru</h6><a href="/pertandingan/tambah" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pertandingan</span>
                  </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="10%">#</th>
                      <th width="20%">Tim</th>
                      <th width="20%">Skor</th>
                      <th width="20%">Tgl Pertandingan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="10%">#</th>
                      <th width="20%">Tim</th>
                      <th width="20%">Skor</th>
                      <th width="20%">Tgl Pertandingan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $no=1; @endphp
                    @foreach($pertandingan as $p)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$p->tim_a}} vs. {{$p->tim_b}}</td>
                      <td>{{$p->skor_tim_a}} vs. {{$p->skor_tim_b}}</td>
                      <td>{{$p->tgl_pertandingan}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endsection