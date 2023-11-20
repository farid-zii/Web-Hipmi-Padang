@extends('backend.layout.main')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Tambah Data Divisi</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Divisi</li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="/dashboard/kategori/create" role="button">
                                Tambah
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Checkbox select Datatable start -->
            <div class="card-box mb-30">
                {{-- <div class="pd-20">
                    <h4 class="text-blue h4"></h4>
                </div> --}}
                <div class="pb-20 p-4">
                    {{-- <a href="/dashboard/jabatan" class="btn btn-dark btn-sm"> Kembali</a> --}}
                    <form action="/dashboard/divisi/{{$data->id}}" method="post">
                        @method('put')
                        @csrf
                        {{-- <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="xxx" name="nama">
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label>Nama Divisi</label>
                            <input class="form-control @error('namaDivisi')
                                form-control-danger
                            @enderror" type="text" name="namaDivisi" value="{{$data->namaDivisi}}" placeholder="Teknologi">
                            @error('namaDivisi')
                                <div class="form-control-feedback text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary btn-sm  mx-2"> <i class="fa fa-undo" aria-hidden="true"></i>

                                Reset</button>
                            <button class="btn btn-primary btn-sm "><i class="fa fa-
                                floppy-o" aria-hidden="true"></i>
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Checkbox select Datatable End -->

            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box fixed-bottom">
            &copy; Copyright {{date('Y')}} - <a href="#">Fanda Alfaridzi</a>
        </div>
    </div>
</div>
@endsection
