@extends('frontend.layout.main')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('backend/images/foto-umkm/'.$data->gambar_usaha)}}" width="100%" height="500px" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('backend/src/images/product-img2.jpg')}}" width="100%" height="500px" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('backend/src/images/product-img3.jpg')}}" width="100%" height="500px" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>UMKM information</h3>
              <img src="{{asset('backend/images/logo-umkm/'.$data->gambar_usaha)}}" alt="" width="200px" height="200px">
              <ul>


                <li><strong>Pemilik</strong> : {{$data->anggota->nama}}</li>
                <li><strong>Sektor</strong> : {{$data->sektor->namaSektor}}</li>
                <li><strong>Lokasi</strong> : {{$data->lokasi}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Detail</h2>
              <p>
                {!! $data->deskripsiUsaha !!}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main>
@endsection
