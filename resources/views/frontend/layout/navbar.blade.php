<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-dark text-white" >

    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo" style="">
        <div class="d-flex">
            <a href="/"><img src="{{asset('frontend/img/logo.png')}}" alt="" class="img-fluid"></a>
            <h5 class="my-auto mx-2"><a href="/" class="" style="color:white;font-weight: bolder">HIPMI PADANG</a></h5>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{Request::segment(1)==null ? 'active':''}}" href="/">Home</a></li>
          <li class="dropdown"><a href="#" ><span class="{{Request::segment(1) == "tentang-kami" || Request::segment(1) == "kepengurusan" || Request::segment(1) == "anggota" ? 'active':''}}">Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/tentang-kami">Tentang Kami</a></li>
              <li><a href="/anggota">Anggota</a></li>
              <li class="dropdown"><a href="#"><span>Kepengurusan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    @php
                        $kepengurusan = App\models\Kepengurusan::get();
                    @endphp
                    @forelse ( $kepengurusan as $data )
                        <li><a href="/kepengurusan/{{$data->tahunMulai}}">{{$data->tahunMulai .' - '. $data->tahunAkhir}}</a></li>
                    @empty

                    <li><a href="#">Tidak ada Kepengurusan</a></li>
                    @endforelse
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/berita" class="{{Request::segment(1) == 'berita' ? 'active':''}}">Berita</a></li>
          <li><a href="/kegiatan" class="{{request::segment(1) == 'kegiatan' ? 'active':''}}">Kegiatan</a></li>
          <li><a href="/umkm" class=" {{request::segment(1) == 'umkm' ? 'active':''}}">UMKM</a></li>
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li><a href="/contact" class=" {{request::segment(1) == 'contact' ? 'active':''}}">Contact</a></li>

          <li><a class="getstarted bg-warning text-dark" href="/contact">Join Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
