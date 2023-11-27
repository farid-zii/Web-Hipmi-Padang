@extends('frontend.layout.main')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>KEPENGURUSAN</h2>
                    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia
                        voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum
                        praesentium. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li>Kepengurusan {{$data->tahunMulai .' - '. $data->tahunAkhir}}</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            {{-- @if (!$data->ketumfoto)
                            <img src="{{asset('backend/images/foto-anggota/foto.jpg')}}" class="img-fluid" width="100%" alt="">
                            @endif --}}
                            <img src="{{asset('backend/images/foto-anggota/'.$data->ketum->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <div class="d-flex"></div>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->ketum->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">KETUA UMUM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->waketum_1->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->waketum_1->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">WAKIL KETUA UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->waketum_2->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->waketum_2->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">WAKIL KETUA UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->waketum_3->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->waketum_3->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">WAKIL KETUA UMUM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->sekre->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <div class="d-flex"></div>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->sekre->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wasekre_1->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wasekre_1->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">Wakil Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wasekre_2->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wasekre_2->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">Wakil Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wasekre_3->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wasekre_3->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">Wakil Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wasekre_4->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wasekre_4->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">Wakil Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wasekre_5->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wasekre_5->nama}}</h4>
                            <span style="font-weight: bolder; color:gray;">Wakil Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wasekre_6->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wasekre_6->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Wakil Sekretaris UMUM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->bendaharas->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <div class="d-flex"></div>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->bendaharas->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Bendahara UMUM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wabend_1->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wabend_1->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Wakil Bendahara UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wabend_2->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wabend_2->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Wakil Bendahara UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wabend_3->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wabend_3->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Wakil Bendahara UMUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->wabend_4->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->wabend_4->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Wakil Bendahara UMUM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_1->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_1->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 1 organisasi, keanggotaan dan kelembagaan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_2->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_2->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 2 Keuangan dan perbankan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_3->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_3->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 3 Perdagangan perindustrian dan ESDM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_4->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_4->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 4 Perhubungan dan BUMN</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_5->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_5->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 5 kemaritiman, pertanian, kehutanan, dan lingkungan hidup</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_6->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_6->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 6 pariwisata, ekonomi kreatif, koperasi dan UMKM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_7->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_7->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 7 investasi, infokom, dan kerjsama internasiona</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_8->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_8->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">Ketua bidang 8 tata ruang, pu dan pembangunan desa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_9->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_9->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 9 ketenagakerjaan, vokasi dan kesehatan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('backend/images/foto-anggota/'.$data->kbid_10->foto)}}" class="img-fluid" width="100%" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{$data->kbid_10->nama}}</h4>
                            <span class="" style="font-weight: bolder;color:gray">ketua bidang 10 Pendidikan riset, sosial, pemuda dan olahraga</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

</main><!-- End #main -->
@endsection
