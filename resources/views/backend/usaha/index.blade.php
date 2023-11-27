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
                            <h4>UMKM</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">UMKM</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary no-arrow" href="/dashboard/usaha/create" role="button">
                                Tambah
                            </a>
                            {{-- <a class="btn btn-primary no-arrow d-inline" href="/dashboard/anggota/create" role="button">
                                export
                            </a> --}}
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmDelete">Launch
  modal</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkbox select Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-dark h4">Data UMKM</h4>
                </div>

                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                {{-- <th class="table-plus datatable-nosort">Name</th> --}}
                                <th width="">#</th>
                                <th width="">Nama UMKM</th>
                                <th width="">Pemilik</th>
                                <th width="">Sektor</th>
                                <th width="">Lokasi</th>
                                <th width="">Action</th>
                                {{-- <th class="datatable-nosort">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index=>$item )
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item->namaUsaha}}</td>
                                <td>{{$item->anggota->nama}}</td>
                                <td>{{$item->sektor->namaSektor}}</td>
                                <td>{{$item->lokasi}}</td>
                                {{-- <td>{{$item->}}</td> --}}
                                <td class="text-center">
                                    <a href="/dashboard/usaha/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Edit</a>
                                    <form method="post" id="myForm" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <a onclick="hapus('usaha',{{$item->id}})" class="btn btn-danger btn-sm"> <i
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

{{-- @livewire('jabatan.create') --}}

@endsection
