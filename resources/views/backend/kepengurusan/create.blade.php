@extends('backend.layout.main')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Tambah Data Kepengurusan Baru</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kepengurusan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="card-box mb-30">

                <div class="pb-20 p-4">
                    {{-- <a href="/dashboard/jabatan" class="btn btn-dark btn-sm"> Kembali</a> --}}
                    <form action="/dashboard/kepengurusan" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf

                        <table class="table table-bordered">
                            <tr>
                                <th>Periode</th>
                                <td>
                                    <div class="row mx-1">
                                        <input type="text" name="tahunMulai" placeholder="Tahun Awal Periode"
                                            class="form-control col-5 " style="margin-right: 10px ">
                                        <div class="col text-center"> Sampai </div>
                                        <input type="text" name="tahunAkhir" placeholder="Tahun Akhir Periode"
                                            class="form-control col-5">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Ketua Umum</th>
                                <td>
                                    <select id="select3" style="width: 100%" class="form-control " name="ketua">
                                        {{-- <option value="a" >sda</option>
                                        <option value="" selected>fanda</option> --}}
                                        @foreach ($anggota as $item )
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                    @error('ketua')
                                    <div class="form-control-feedback text-danger">Data Ketua Wajib Isi</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Wakil Ketua umum</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="waket_1" style="width: 100%" class="form-control " name="waket_1">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waket_1')
                                        <div class="form-control-feedback text-danger">Data Wakil Ketua Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2 ">
                                        <select id="waket_2" style="width: 100%" class="form-control " name="waket_2">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waket_2')
                                            <div class="form-control-feedback text-danger">Data Wakil Ketua Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="waket_3" style="width: 100%" class="form-control " name="waket_3">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waket_3')
                                            <div class="form-control-feedback text-danger">Data Wakil Ketua Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Sekretaris</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="sekretaris" style="width: 100%" class="form-control "
                                            name="sekretaris">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('sekretaris')
                                            <div class="form-control-feedback text-danger">Data Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Wakil Sekretaris Umum</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="wasek_1" style="width: 100%" class="form-control "
                                            name="wasek_1">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('wasek_1')
                                            <div class="form-control-feedback text-danger">Data Wakil Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="wasek_2" style="width: 100%" class="form-control "
                                            name="wasek_2">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('wasek_2')
                                            <div class="form-control-feedback text-danger">Data Wakil Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="wasek_3" style="width: 100%" class="form-control "
                                            name="wasek_3">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('wasek_3')
                                            <div class="form-control-feedback text-danger">Data Wakil Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="wasek_4" style="width: 100%" class="form-control "
                                            name="wasek_4">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('wasek_4')
                                            <div class="form-control-feedback text-danger">Data Wakil Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="wasek_5" style="width: 100%" class="form-control "
                                            name="wasek_5">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('wasek_5')
                                            <div class="form-control-feedback text-danger">Data Wakil Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="wasek_6" style="width: 100%" class="form-control "
                                            name="wasek_6">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('wasek_6')
                                            <div class="form-control-feedback text-danger">Data Wakil Sekretaris Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Bendahara</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="bendahara" style="width: 100%" class="form-control "
                                            name="bendahara">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('bendahara')
                                            <div class="form-control-feedback text-danger">Data Bendahara Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Wakil Bendahara</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="waben_1" style="width: 100%" class="form-control "
                                            name="waben_1">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waben_1')
                                            <div class="form-control-feedback text-danger">Data Wakil Bendahara Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="waben_2" style="width: 100%" class="form-control "
                                            name="waben_2">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waben_2')
                                            <div class="form-control-feedback text-danger">Data Wakil Bendahara Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="waben_3" style="width: 100%" class="form-control "
                                            name="waben_3">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waben_3')
                                            <div class="form-control-feedback text-danger">Data Wakil Bendahara Wajib Isi</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <select id="waben_4" style="width: 100%" class="form-control "
                                            name="waben_4">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('waben_4')
                                            <div class="form-control-feedback text-danger">Data Wakil Bendahara Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 1</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_1" style="width: 100%" class="form-control "
                                            name="kabid_1">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_1')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 1 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 2</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_2" style="width: 100%" class="form-control "
                                            name="kabid_2">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_2')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 2 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 3</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_3" style="width: 100%" class="form-control "
                                            name="kabid_3">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_3')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 3 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 4</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_4" style="width: 100%" class="form-control "
                                            name="kabid_4">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_4')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 4 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 5</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_5" style="width: 100%" class="form-control "
                                            name="kabid_5">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_5')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 5 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 6</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_6" style="width: 100%" class="form-control "
                                            name="kabid_6">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_6')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 6 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 7</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_7" style="width: 100%" class="form-control "
                                            name="kabid_7">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_7')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 7 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 8</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_8" style="width: 100%" class="form-control "
                                            name="kabid_8">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_8')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 8 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 9</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_9" style="width: 100%" class="form-control "
                                            name="kabid_9">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_9')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 9 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-transform: capitalize">Ketua Bidang 10</th>
                                <td>
                                    <div class="mb-2">
                                        <select id="kabid_10" style="width: 100%" class="form-control "
                                            name="kabid_10">
                                            @foreach ($anggota as $item )
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabid_10')
                                            <div class="form-control-feedback text-danger">Data Ketua Bidang 10 Wajib Isi</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary btn-sm  mx-2"> <i class="fa fa-undo"
                                    aria-hidden="true"></i>

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
<script>
    $(document).ready(function () {
        $('#select3').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waket_1').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waket_2').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waket_3').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#sekretaris').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#wasek_1').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#wasek_2').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#wasek_3').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#wasek_4').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#wasek_5').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#wasek_6').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#bendahara').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waben_1').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waben_2').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waben_3').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#waben_4').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_1').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_2').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_3').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_4').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_5').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_6').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_7').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_8').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_9').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });
    $(document).ready(function () {
        $('#kabid_10').select2({
            placeholder: "Pilih Data",
            width: 'resolve'
        });
    });

</script>
@endsection
