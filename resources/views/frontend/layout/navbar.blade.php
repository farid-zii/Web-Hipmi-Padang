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
          <li><a class="active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">Tentang Kami</a></li>
              <li><a href="team.html">Kepengurusan</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Berita</a></li>
          <li><a href="pricing.html">Kegiatan</a></li>
          <li><a href="portfolio.html">Sektor</a></li>
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li><a href="contact.html">Contact</a></li>

          <li><a class="getstarted bg-warning text-dark" href="about.html">Join Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
