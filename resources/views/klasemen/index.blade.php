@extends('base')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Klasemen Sementara</h6><a href="/tim/tambah" class="btn btn-success btn-icon-split">
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
                      <th width="20%">Nama Tim</th>
                      <th width="20%">Main</th>
                      <th width="20%">Kalah</th>
                      <th width="20%">Menang</th>
                      <th width="20%">Imbang</th>
                      <th width="20%">Total Poin</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="10%">#</th>
                      <th width="20%">Nama Tim</th>
                      <th width="20%">Main</th>
                      <th width="20%">Kalah</th>
                      <th width="20%">Menang</th>
                      <th width="20%">Imbang</th>
                      <th width="20%">Total Poin</th>
                      <th width="20%">Aksi</th>

                    </tr>
                  </tfoot>
                  <tbody>
                    @php $no=1; @endphp
                    @foreach($klasemen as $k)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$k->nama_tim}}</td>
                      <td align="center"><h3><span class="badge badge-primary">{{$k->main}}</span></h3></td>
                      <td align="center"><h3><span class="badge badge-danger">{{$k->kalah}}</span></h3></td>
                      <td align="center"><h3><span class="badge badge-warning">{{$k->menang}}</span></h3></td>
                      <td align="center"><h3><span class="badge badge-primary">{{$k->imbang}}</span></h3></td>
                      <td align="right"><h3><span class="badge badge-primary">{{$k->total}}</span></h3></td>
                      <td><div class="my-2"><a href="/pertandingan/tambah/{{ $k->id }}" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-eye"></i>
                    </span>
                    <span class="text">Tambah Pertandingan</span>
                  </a></div></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endsection