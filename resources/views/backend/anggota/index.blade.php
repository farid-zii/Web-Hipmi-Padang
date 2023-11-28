@extends('backend.layout.main')
@section('content')


@include('alert')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Anggota</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Anggota</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary no-arrow" href="/dashboard/anggota/create" role="button">
                                Tambah
                            </a>
                            <button type="button" class="btn btn-dark d-inline" data-toggle="modal"
                                data-target="#exampleModal">
                                Import Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkbox select Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-dark h4">Data Anggota</h4>
                </div>

                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                {{-- <th class="table-plus datatable-nosort">Name</th> --}}
                                <th width="">#</th>
                                <th width="">Nama</th>
                                <th width="">Divisi</th>
                                <th width="">No Hp </th>
                                <th width="">Email</th>
                                <th width="">Action</th>
                                {{-- <th class="datatable-nosort">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index=>$item )
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->divisi == null ? '-': $item->divisi->namaDivisi;}}</td>
                                <td>{{$item->noHp}}</td>
                                <td>{{$item->email}}</td>
                                <td class="text-center">
                                    <a href="/dashboard/anggota/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Edit</a>
                                    <form method="post" id="myForm" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <a onclick="hapus('anggota',{{$item->id}})" class="btn btn-danger btn-sm"> <i
                                                class="fa fa-trash" aria-hidden="true"></i>
                                            Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>

            <!-- Checkbox select Datatable End -->

            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            &copy; Copyright {{date('Y')}} - <a href="#">Fanda Alfaridzi</a>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Excel Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard/anggota-import" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="file" accept="" name="data" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambahkan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- @livewire('jabatan.create') --}}

@endsection
