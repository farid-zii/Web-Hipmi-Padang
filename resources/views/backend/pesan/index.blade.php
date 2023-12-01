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
                            <h4>Pesan</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pesan</li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary no-arrow" href="/dashboard/Pesan/create" role="button">
                                Tambah
                            </a>
                            </button>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Checkbox select Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-dark h4">Data Pesan</h4>
                </div>

                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                {{-- <th class="table-plus datatable-nosort">Name</th> --}}
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Action</th>
                                {{-- <th class="datatable-nosort">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index=>$item )
                            <tr>
                                <td>{{$index+1}}</td>
                                <td style="text-transform: capitalize">{{$item->namaPengirim}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->subject}}</td>
                                <td>
                                    {{-- <button ata-toggle="modal" data-target="#data-{{$item->id}}" class="btn btn-warning btn-sm"> <i
                                            class="bi bi-eye-fill" aria-hidden="true"></i>
                                        Show</button> --}}
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#data-{{$item->id}}">
  <i
                                            class="bi bi-eye-fill" aria-hidden="true"></i>
</button>
                                    <form method="post" id="myForm" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <a onclick="hapus('pesan',{{$item->id}})" class="btn btn-danger btn-sm"> <i
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


@foreach ($data as $item )
    <div class="modal fade" id="data-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PESAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            <p class="fw-bold">Nama : {{$item->namaPengirim}}</p>
            <p class="fw-bold">No HP : {{$item->noHp}}</p>
            <p class="fw-bold">email : {{$item->email}}</p>
            <p class="fw-bold">Subject : {{$item->subject}}</p>
        </div>
        <hr>
        <p>{{$item->deskripsi}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- @livewire('jabatan.create') --}}

@endsection
