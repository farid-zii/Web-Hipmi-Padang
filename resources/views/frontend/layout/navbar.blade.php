<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-dark text-white" >

    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo" style="">
        <div class="d-flex">
            <a href="index.html"><img src="{{asset('frontend/img/logo.png')}}" alt="" class="img-fluid"></a>
            <h5 class="my-auto mx-2"><a href="/" class="" style="color:white;font-weight: bolder">HIPMI PADANG</a></h5>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{Request::segment(1) == null ? 'active':''}}" href="/">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">Tentang Kami</a></li>
              <li><a href="team.html">Anggota</a></li>
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
          <li><a href="/kegiatan" {{request::segment(1) == 'kegiatan' ? 'active':''}}>Kegiatan</a></li>
          <li><a href="/sektor" {{request::segment(1) == 'sektor' ? 'active':''}}>Sektor</a></li>
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li><a href="contact.html" {{request::segment(1) == 'contact' ? 'active':''}}>Contact</a></li>

          <li><a class="getstarted bg-warning text-dark" href="about.html">Join Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
