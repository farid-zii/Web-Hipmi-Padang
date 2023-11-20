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
                            <h4>User</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary no-arrow" href="/dashboard/user/create" role="button">
                                Tambah
                            </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkbox select Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-dark h4">Data User</h4>
                </div>

                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                {{-- <th class="table-plus datatable-nosort">Name</th> --}}
                                <th>#</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Action</th>
                                {{-- <th class="datatable-nosort">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index=>$item )
                            <tr>
                                <td>{{$index+1}}</td>
                                <td style="text-transform: capitalize">{{$item->username}}</td>
                                <td>{{$item->level}}</td>
                                <td>
                                    <a href="/dashboard/user/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Edit</a>
                                    <form method="post" id="myForm" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <a onclick="hapus('user',{{$item->id}})" class="btn btn-danger btn-sm"> <i
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
