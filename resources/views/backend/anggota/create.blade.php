@extends('backend.layout.main')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Tambah Data Anggota</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Anggota</li>
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
                    <form action="/dashboard/anggota" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control @error('nama')
                                form-control-danger
                            @enderror" type="text" name="nama" value="{{old('nama')}}" placeholder="Kesehatan" required>
                            @error('nama')
                                <div class="form-control-feedback text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Tempat Lahir</label>
                                <input class="form-control @error('tempatLahir')
                                    form-control-danger
                                @enderror" type="text" name="tempatLahir" value="{{old('tempatLahir')}}" placeholder="Padang" required>
                                @error('tempatLahir')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label>Tanggal Lahir</label>
                                <input class="form-control @error('tanggalLahir')
                                    form-control-danger
                                @enderror" type="date" name="tanggalLahir" value="{{old('tanggalLahir')}}" placeholder="Kesehatan" required>
                                @error('tanggalLahir')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Nomor Hp</label>
                                <input  type="text" class="form-control @error('noHp') form-control-danger @enderror" name="noHp" required>
                                @error('noHp')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label>Email</label>
                                <input type="email" class="form-control @error('email') form-control-danger @enderror" name="email" required>
                                @error('email')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Jenis Kelamin</label>
                                <select class="form-control @error('jKelamin') form-control-danger @enderror" name="jKelamin" required>
                                    <option value="Laki - Laki" >Laki-Laki</option>
                                    <option value="Perempuan" >Perempuan</option>
                                </select>
                                @error('jKelamin')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input class="form-control @error('foto')
                                form-control-danger
                            @enderror" type="file" name="foto" accept="" value="{{old('foto')}}" placeholder="Kesehatan" required>
                            @error('foto')
                                <div class="form-control-feedback text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Divisi</label>
                                <select class="form-control @error('idDivisi') form-control-danger @enderror" name="idDivisi">
                                    <option value="" >----Pilih Kategori---</option>
                                    @foreach ($divisi as $item )
                                        <option value="{{$item->id}}">{{$item->namaDivisi}}</option>
                                    @endforeach
                                </select>
                                @error('idDivisi')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control @error('alamat')
                                    form-control-danger
                                @enderror" type="text" name="alamat" value="{{old('alamat')}}" placeholder="Padang" required></textarea>
                                @error('alamat')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                        </div>

                        <div class="form-group">
                                <label>Motto</label>
                                <textarea class="form-control @error('motto')
                                    form-control-danger
                                @enderror" type="text" name="motto" value="{{old('motto')}}" placeholder="Padang" required></textarea>
                                @error('motto')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="facebook"  placeholder="masukkan url">
                            </div>
                            <div class="col-6">
                                <label>Twitter</label>
                                <input type="text" class="form-control" name="twitter" placeholder="masukkan url" >
                            </div>
                            <div class="col-6">
                                <label>Insatgram</label>
                                <input type="text" class="form-control" name="instagram" placeholder="masukkan url">
                            </div>
                            <div class="col-6">
                                <label>LinkedIn</label>
                                <input type="text" class="form-control" name="linkedin" placeholder="masukkan url">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary btn-sm  mx-2"> <i class="fa fa-undo" aria-hidden="true"></i>

                                Reset</button>
                            <button class="btn btn-primary btn-sm "><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Simpan</button>
                        </div>
                    </form>
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
@endsection
