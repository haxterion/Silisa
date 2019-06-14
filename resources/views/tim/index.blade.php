@extends('base')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tim</h6><a href="/tim/tambah" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Tim</span>
                  </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="20%">Logo</th>
                      <th width="20%">Nama Tim</th>
                      <th width="20%">List Squad</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="20%">Logo</th>
                      <th width="20%">Nama Tim</th>
                      <th width="20%">List Squad</th>
                      <th width="20%">Aksi</th>

                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($tim as $t)
                    <tr>
                      <td><img src="images/{{$t->logo}}" style="width: 100%"></td>
                      <td>{{$t->nama_tim}}</td>
                      <td><div class="my-2"><a href="/tim/squad/{{ $t->id }}" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-eye"></i>
                    </span>
                    <span class="text">Lihat Squad</span>
                  </a></div></td>
                      <td>
                        <div class="my-2">
                        <a href="/tim/edit/{{ $t->id }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-pen-square"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                </div><div class="my-2"><a href="/tim/hapus/{{ $t->id }}" class="btn btn-danger btn-icon-split ">
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