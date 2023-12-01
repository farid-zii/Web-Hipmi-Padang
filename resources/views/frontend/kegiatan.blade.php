@extends('frontend.layout.main')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Kegiatan</h2>
                </div>
            </div>
        </div>

    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="m-3 p-4 shadow">

            <h2>Kegiatan Yang Akan Datang</h2>

            @forelse ($data as $index=>$item )
            <div class="col-md-4">
                <div class="icon-box row" style="box-shadow: 3px 3px 3px rgb(71, 69, 69)">
                    <div class="col-4 text-center row ">
                        <div class="bg-danger fw-bold my-auto"  style="border: 1px solid black">
                            {{carbon\carbon::parse($item->tanggalKegiatan)->isoFormat("MMM Y")}}</div>
                        <h2 class=""  style="border: 1px solid black">{{carbon\carbon::parse($item->tanggalKegiatan)->isoFormat("DD")}}</h2>
                    </div>
                    <div class="col-8">
                        <h4 class="title my-auto"><a href="" class="text-dark">{{$item->namaKegiatan}}</a></h4>
                        <p class="">Jam : {{carbon\carbon::parse($item->jamMulai)->isoFormat('HH:mm') .' - '. $item->jamAkhir}} <br> Lokasi : {{$item->lokasi}}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            Tidak ada data
            @endforelse

            <h2 class="mt-3">Kegiatan Yang Terlaksana</h2>

        </div>
    </section><!-- End Contact Section -->
</main>




<!-- Button trigger modal -->

<!-- Modal -->
@foreach ($data as $item )

<div class="modal fade" id="data-{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>{{$item->namaKegiatan}}</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- @endforeach --}}
@endsection

<script>
    $(document).ready(function () {
        $('#myTabel').DataTable();
    });

</script>
