@extends('base')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Squad</h6><a href="/tim/squadtambah" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Squad</span>
                  </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="20%">#</th>
                      <th width="20%">Nama</th>
                      <th width="20%">No. Punggung</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="20%">#</th>
                      <th width="20%">Nama</th>
                      <th width="20%">No. Punggung</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $no=1; @endphp
                    @foreach($squad as $s)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$s->nama}}</td>
                      <td>{{$s->no_punggung}}</td>
                      <td>
                        <div class="my-2">
                        <a href="/tim/edit-squad/{{ $s->id }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-pen-square"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                </div><div class="my-2"><a href="/tim/hapus-squad/{{ $s->id }}" class="btn btn-danger btn-icon-split ">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Hapus Tim</span>
                  </a></div></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endsection