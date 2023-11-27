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
                    <form action="/dashboard/usaha" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf

                        <div class="form-group">
                            <label>Nama UMKM</label>
                            <input class="form-control @error('namaUsaha')
                                form-control-danger
                            @enderror" type="text" name="namaUsaha" value="{{old('namaUsaha')}}" placeholder="Kesehatan" required>
                            @error('namaUsaha')
                                <div class="form-control-feedback text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <input class="form-control @error('logo')
                                form-control-danger
                            @enderror" type="file" name="logo" accept="" value="{{old('logo')}}" placeholder="Kesehatan">
                            @error('logo')
                                <div class="form-control-feedback text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Pemilik</label>
                                <select class="form-control @error('id_anggota') form-control-danger @enderror" id="anggota" name="id_anggota">
                                    {{-- <option value="" >----Pilih Kategori---</option> --}}
                                    @foreach ($anggota as $item )
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                                @error('id_anggota')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label>Sektor Usaha</label>
                                <select class="form-control @error('id_sektor') form-control-danger @enderror" id="divisi" name="id_sektor">
                                    {{-- <option value="" >----Pilih Kategori---</option> --}}
                                    @foreach ($sektor as $item )
                                        <option value="{{$item->id}}">{{$item->namaSektor}}</option>
                                    @endforeach
                                </select>
                                @error('id_sektor')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                                <label>Lokasi</label>
                                <textarea class="form-control @error('lokasi')
                                    form-control-danger
                                @enderror" type="text" name="lokasi" value="{{old('lokasi')}}" placeholder="Padang" required></textarea>
                                @error('lokasi')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                        </div>

                        <div class="form-group">
                                <label>Dekripsi Usaha</label>
                                <textarea  class="form-control @error('deskripsiUsaha')
                                    form-control-danger
                                @enderror"  name="deskripsiUsaha" value="{{old('deskripsiUsaha')}}" placeholder="Padang" required></textarea>
                                @error('deskripsiUsaha')
                                    <div class="form-control-feedback text-danger">{{$message}}</div>
                                @enderror
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary btn-sm  mx-2"> <i class="fa fa-undo" aria-hidden="true"></i>

                                Reset</button>
                            <button class="btn btn-primary btn-sm " type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>
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
{{-- <script>
    $(document).ready(function () {
        $('#divisi').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#anggota').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
</script> --}}
