@extends('frontend.layout.main')
@section('content')

<section id="hero">
    <div class="hero-container" style="text-shadow: 2px 2px black" data-aos="fade-up">
        <h1>Welcome to HIPMI Padang</h1>
        <h2>Kamu Punya Usaha Ayo Bergabung Dengan Kami Sekarang Jugaa..</h2>
        <a href="#about" class="btn-get-started scrollto ">Join Now</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box py-5">
                                <i class="bi bi-newspaper"></i>
                                <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter">0</span>
                                <p class="fw-bold">BERITA</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box py-5">
                                <i class="bi bi-calendar-event-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="85" class="purecounter">0</span>
                                <p class="fw-bold">EVENT</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                                <i class="bi bi-building-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="27" class="purecounter">0</span>
                                <p class="fw-bold">UMKM</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                                <i class="bi bi-people-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                                <p class="fw-bold">ANGGOTA</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 video-box align-self-baseline position-relative">
                    <img src="{{asset('frontend/img/about.jpg')}}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=Q-kHUsbaUFM" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content">
                    <h2 style=" ">Sejarah</h2>
                    <p class="fst-italic">
                        Himpunan Pengusaha Muda Indonesia (HIPMI) didirikan pada 10 Juni 1972. Pendirian organisasi ini
                        dilandasi semangat untuk menumbuhkan wirausaha di kalangan pemuda, karena pada saat itu tidak
                        banyak kaum muda yang bercita-cita menjadi pengusaha.
                    </p>

                    <p>
                        Pada saat itu, anggapan yang berkembang di masyarakat menempatkan kelompok pengusaha pada strata
                        yang sangat rendah sehingga sebagian besar anak muda terutama kalangan intelektual lebih memilih
                        profesi lain seperti birokrat, TNI/POLRI dan sebagainya.
                    </p>

                    <p>
                        Dalam perjalanannya sampai terjadinya krisis ekonomi pada 1998, HIPMI telah sukses mencetak
                        kaderisasi wirausaha, dengan tampilnya tokoh-tokoh muda dalam percaturan dunia usaha nasional
                        maupun internasional. Keadaan itu kemudian dapat merubah pandangan masyarakat terhadap profesi
                        pengusaha pada posisi terhormat.
                    </p>

                    <p>
                        Pada Era Reformasi, terutama pasca krisis ekonomi, dituntut adanya perubahan visi dan misi
                        organisasi. HIPMI senantiasa adaptif dengan paradigma baru, yakni menjadikan Usaha Kecil
                        Menengah sebagai pilar utama dan lokomotif pembangunan ekonomi nasional.
                    </p>
                </div>

            </div>

            <div class="row justify-content-center mt-3 mb-5">
                <div class="col-lg-11 row">
                    <div class="col-lg-6 bg-dark p-4" style="color: whitesmoke ;text-align: justify" data-aos="fade-up">
                        <h2 style="border-bottom: 2px solid whitesmoke"> Visi </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga enim tempore distinctio facere
                            tenetur facilis deleniti blanditiis doloremque est eligendi? Libero, consectetur. Tempora
                            repudiandae odio fugit? Dicta iusto beatae consequuntur eaque minus sunt ab, totam, vero
                            nobis possimus sint eveniet praesentium neque quos! Minus excepturi et, blanditiis deleniti
                            commodi, labore architecto totam possimus consectetur iure ullam consequuntur dolorum
                            impedit nisi. Neque recusandae autem iure voluptatum id eos nobis consequatur, provident
                            voluptatem facilis? Sunt repudiandae exercitationem dolores harum totam reprehenderit
                            expedita deleniti</p>
                    </div>
                    <div class="col-lg-6 bg-warning p-4" style="text-align: justify" data-aos="fade-in">
                        <h2 style="border-bottom: 2px solid black">Misi</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga enim tempore distinctio facere
                            tenetur facilis deleniti blanditiis doloremque est eligendi? Libero, consectetur. Tempora
                            repudiandae odio fugit? Dicta iusto beatae consequuntur eaque minus sunt ab, totam, vero
                            nobis possimus sint eveniet praesentium neque quos! Minus excepturi et, blanditiis deleniti
                            nobis possimus sint eveniet praesentium neque quos! Minus excepturi et, blanditiis deleniti
                            nobis possimus sint eveniet praesentium neque quos! Minus excepturi et, blanditiis deleniti
                            commodi, labore architecto totam possimus consectetur iure ullam consequuntur dolorum
                            impedit nisi. Neque recusandae autem iure voluptatum id eos nobis consequatur, provident
                            voluptatem facilis? Sunt repudiandae exercitationem dolores harum totam reprehenderit
                            expedita deleniti</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>Quotes</h3>
                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->


                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    {{-- <div class="swiper-pagination" style="margin-top: 150px"></div> --}}
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    {{-- <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h2>Testimonialss</h2>
                <p>What are they sayi ng about us</p>
            </div>

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">

                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">

                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
        <div class="container">

            <div class="section-title pt-5" data-aos="fade-up">
                <h2>Mengapa Harus Bergabung ?</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="icon-box shadow" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">memberikan keuntungan bersama (mutual benefit) bagi anggotanya dan
                            bersifat kekeluargaan/gotong-royong.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="icon-box shadow" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Wadah penyaluran aspirasi pengusaha muda Indonesia merupakan organisasi
                            non-profit dengan semangat usaha.</p>
                    </div>
                </div>

                <div class="col-md-12 " data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box shadow">
                        <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Organisasi non pemerintah, yang independen/non politik, yang bergerak
                            dibidang perekonomian sesuai dengan Undang-Undang No.1 Tahun 1987 tentang Kamar Dagang dan
                            Industri serta perundang-undangan dunia usaha lainnya</p>
                    </div>
                </div>
                {{-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div> --}}
            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->


@endsection
