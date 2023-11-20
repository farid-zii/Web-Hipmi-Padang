@extends('backend.layout.main')
@section('content')


@include('alert')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12 row mb-4">
                        <div class="col-md-4">
                            <img src="{{asset('backend/src/images/logo/logo-hipmi.png')}}" alt="sda">
                        </div>
                        <div class="col-md-6 text-dark">
                            <h2>BPC HIPMI PADANG</h2>
                            <p> JL. Veteran, No.12-C, Padang, West Sumatera, Purus, Padang Barat, Padang City, West Sumatra 25115 </p>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 col-sm-12">
                    <div class="mb-2 px-3 text-justify">
                        <h4 style="border-bottom:2px solid rgb(104, 100, 100);">Tentang Kami</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo nostrum facilis
                            possimus deleniti id, corrupti perferendis dicta, tenetur accusamus inventore iusto
                            quidem quo omnis esse necessitatibus culpa facere eaque delectus cum. Officia pariatur
                            maiores voluptate at unde blanditiis recusandae hic delectus molestias voluptatibus
                            placeat, reprehenderit omnis veritatis natus, necessitatibus nisi ullam ipsum eaque
                            sunt. Magni ducimus soluta nostrum vero! Error aperiam aliquam exercitationem nobis
                            autem earum distinctio aliquid placeat vero sint vitae ut, neque recusandae veritatis
                            quae dolorum at illum aspernatur blanditiis id eum! Eius a inventore, est aperiam
                            similique velit dolores unde dicta minima, soluta in pariatur quasi?</p>
                    </div>
                    <div class="mb-2 px-3 text-justify">
                        <h4 style="border-bottom:2px solid rgb(104, 100, 100);">Sejarah HIPMI</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo nostrum facilis
                            possimus deleniti id, corrupti perferendis dicta, tenetur accusamus inventore iusto
                            quidem quo omnis esse necessitatibus culpa facere eaque delectus cum. Officia pariatur
                            maiores voluptate at unde blanditiis recusandae hic delectus molestias</p>
                    </div>
                    <div class="mb-2 px-3 text-justify">
                        <h4 style="border-bottom:2px solid rgb(104, 100, 100);">Visi</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo nostrum facilis
                            possimus deleniti id, corrupti perferendis dicta, tenetur accusamus inventore iusto
                            quidem quo omnis esse necessitatibus culpa facere eaque delectus cum. Officia pariatur
                        </p>
                    </div>
                    <div class="mb-2 px-3 text-justify">
                        <h4 style="border-bottom:2px solid rgb(104, 100, 100);">Misi</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo nostrum facilis
                            possimus deleniti id, corrupti perferendis dicta, tenetur accusamus inventore iusto
                            quidem quo omnis esse necessitatibus culpa facere eaque delectus cum. Officia pariatur
                            maiores voluptate at unde blanditiis recusandae hic delectus molestias</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkbox select Datatable start -->
        {{-- <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-dark h4">Data Divisi</h4>
                </div>

                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>Nama</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index=>$item )
                            <tr>
                                <td>{{$index+1}}</td>
        <td>{{$item->namaDivisi}}</td>
        <td>
            <a href="/dashboard/divisi/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i
                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Edit</a>
            <form method="post" id="myForm" class="d-inline">
                @csrf
                @method('delete')
                <a onclick="hapus('divisi',{{$item->id}})" class="btn btn-danger btn-sm"> <i class="fa fa-trash"
                        aria-hidden="true"></i>
                    Delete</a>
            </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>


</div> --}}

<!-- Checkbox select Datatable End -->

<!-- Export Datatable End -->
</div>
<div class="footer-wrap pd-20 mb-20 card-box">
    &copy; Copyright {{date('Y')}} - <a href="#">Fanda Alfaridzi</a>
</div>
</div>
</div>


@endsection
