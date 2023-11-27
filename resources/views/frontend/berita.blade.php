@extends('frontend.layout.main')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Berita</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li>Berita</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            @forelse ($berita as $item)
            <article class="entry">

              <div class="entry-img">
                <img src="{{asset('backend/images/berita/'.$item->gambarBerita)}}" alt="" width="100%" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="berita/blog/{{$item->slug}}">{{$item->judulBerita}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{carbon\carbon::parse($item->tanggalBerita)->isoFormat('DD MMMM Y')}}</time></a></li>
                  {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> --}}
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!!Str::words($item->deskripsi,20,'...')!!}
                </p>
                <div class="read-more">
                  <a href="berita/blog/{{$item->slug}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @empty
                <h2>Tidak Ada Data</h2>
            @endforelse


          </div><!-- End blog entries list -->



             @include('frontend.layout.sidebar')



        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
