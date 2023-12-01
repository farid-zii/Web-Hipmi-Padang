@extends('frontend.layout.main')
@section('content')

<section id="hero">
    <div class="hero-container" style="text-shadow: 2px 2px black" data-aos="fade-up">
        <h1>Welcome to HIPMI Padang</h1>
        <h2>Kamu Punya Usaha Mari Bergabung Dengan Kami Sekarang Jugaa..</h2>
        <a href="/contact" class="btn-get-started scrollto ">Join Now</a>
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
                                <span data-purecounter-start="0" data-purecounter-end="{{$berita->count()}}"
                                    class="purecounter">0</span>
                                <p class="fw-bold">BERITA</p>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box py-5">
                                <i class="bi bi-calendar-event-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$kegiatan->count()}}"
                                    class="purecounter">0</span>
                                <p class="fw-bold">EVENT</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                                <i class="bi bi-building-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$usaha->count()}}"
                                    class="purecounter">0</span>
                                <p class="fw-bold">UMKM</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                                <i class="bi bi-people-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$anggota->count()}}"
                                    class="purecounter">0</span>
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
                    <h2 style="font-weight: bolder">Tentang HIPMI</h2>
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
                    <a href="/tentang-kami" class="btn btn-dark btn-sm " style="justify-content: right">Read More..</a>
                </div>

            </div>


        </div>
    </section><!-- End About Section -->

    <section class="about">
        <div class="container">
            <h2 class="text-center fw-bold">Berita Terbaru</h2>

            <div class="features">

                <div class="row">
                    @forelse ($berita->take(4) as $item )
                    <div class="col-md-6 d-flex align-items-stretch my-3" data-aos="fade-up">
                        <div class="card"
                            style="background-image: url({{asset('backend/images/berita/'.$item->gambarBerita)}});">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{$item->judulBerita}}</a></h5>
                                <p class="card-text">{!! Str::words($item->deskripsi,'15','...') !!}</p>
                                <div class="read-more"><a href="/berita/blog/{{$item->slug}}"><i
                                            class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>

                    @empty
                    <h2>Belum Ada Berita</h2>
                    @endforelse
                    {{-- <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up">
                        <div class="card" style="background-image: url({{asset('frontend/img/features-2.jpg')}});">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Plan</a></h5>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            doloremque laudantium, totam rem.</p>
                        <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card" style="background-image: url({{asset('frontend/img/features-3.jpg')}});">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Vision</a></h5>
                        <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed
                            quia magni dolores.</p>
                        <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card" style="background-image: url({{asset('frontend/img/features-4.jpg')}});">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Care</a></h5>
                        <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam
                            laudantium voluptatem.</p>
                        <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </div>
                </div>
            </div> --}}
        </div>
        </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h2 class="text-center fw-bold">Bidang HIPMI</h2>

            <div class="features">

                @php
                    $bidang1 = App\models\Divisi::where('id','<','6')->get();
                    $bidang2 = App\models\Divisi::where('id','>','5')->get();
                @endphp
                <div class="row" style="justify-content: center">
                    @foreach ($bidang1 as $item )
                    <div class="col-lg-2 d-flex align-items-stretch my-3 text-center row" data-aos="fade-up">

                        <i class="bi bi-bank my-0" style="font-size: 40px"></i>
                        <div class="fw-bold my-0" style="text-shadow: 2px 1px 2px yellow"> {{$item->namaDivisi}} </div>
                    </div>
                    @endforeach
                </div>
                <div class="row " style="justify-content: center">
                    @foreach ($bidang2 as $item )
                    <div class="col-lg-2 d-flex align-items-stretch my-3 text-center row" data-aos="fade-up">
                        <i class="bi bi-bank my-0" style="font-size: 40px"></i>
                        <div class="fw-bold" style="text-shadow: 2px 1px 2px yellow;margin:0;"> {{$item->namaDivisi}} </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <hr>


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


    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
        <div class="container">

            <div class="section-title pt-5" data-aos="fade-up">
                <h2>Mengapa Harus Bergabung ?</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="icon-box shadow row" data-aos="fade-up">
                        <div class="col-1 text-center">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        </div>
                        <div class="col-10">
                            <h4 class="title"><a href="">Koneksi-Solusi</a></h4>
                            <p class="description">HIPMI akan mempertemukan Anda dengan ribuan anggota lainnya, lintas
                                generasi dan daerah. Perluas jangkauan koneksi Anda untuk menyelesaikan tantangan
                                kewirausahaan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="icon-box shadow row" data-aos="fade-up">
                        <div class="col-1 text-center">
                            <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                        </div>
                        <div class="col-10">
                            <h4 class="title"><a href="">Kolaborasi-Kompetisi</a></h4>
                            <p class="description">Petakan pesaing dan mitra usaha Anda melalui HIPMI. Bangun kolaborasi
                                untuk memajukan usaha Anda dalam berkompetisi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="icon-box shadow row" data-aos="fade-up">
                        <div class="col-1 text-center">
                            <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                        </div>
                        <div class="col-10">
                            {{-- <h4 class="title"><a href="">Kolaborasi-Kompetisi</a></h4> --}}
                            <h4 class="title"><a href="">Aktual-Kapital</a></h4>
                            <p class="description">Dapatkan informasi terbaru dan kesempatan untuk terlibat dalam
                                program-program peningkatan kapasitas khusus anggota, serta akses modal melalui
                                mitra-mitra
                                HIPMI Jaya.</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                </div> --}}

            </div>

        </div>
    </section><!-- End Services Section -->

    <section id="" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>UMKM HIPMI PADANG</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="clients-slider swiper px-4">
                <div class="swiper-wrapper align-items-center">
                    @forelse ($usaha->take(9) as $item )
                    <div class="swiper-slide"><img src="{{asset('backend/images/logo-umkm/'.$item->logo)}}"
                            class="img-fluid" alt=""></div>
                    @empty
                        {{-- Tidak Da Data --}}
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-2.png')}}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-3.png')}}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-4.png')}}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-5.png')}}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-6.png')}}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-7.png')}}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('frontend/img/clients/client-8.png')}}"
                                class="img-fluid" alt=""></div>
                    @endforelse
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
            </div>

        </div>
    </section>

</main><!-- End #main -->


@endsection
