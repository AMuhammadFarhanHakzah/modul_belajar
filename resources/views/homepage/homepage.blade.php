@extends('layouts.home')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <br><span>Modulez</span></h2>
                    <p>Let's scroll or click below</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('modul') }}" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-4">
                    <img src="assets/img/Business_PP1125_generated.jpg" class="img-fluid" style="border-radius: 50em;"
                        alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        {{-- <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Universitas Muhammadiyah Sidenreng Rappang</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Pendidikan Bahasa Indonesia</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Lokasi kampus</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Program studi</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div> --}}

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/img/vscode.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/laravel1.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/mysql.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/canva.webp') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/mword.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/bootstrap1.png') }}" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="Modul" class="document sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Modul</h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4 portfolio-container">

                        @foreach ($moduls as $modul)
                            <div class="col-xl-4 col-md-6  portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <article>
                                        <a href="{{ route('modul_detail', $modul->modul_id) }}">
                                            <div class="post-img">
                                                <img src="document/fotoStorage/{{ $modul->foto }}" alt=""
                                                    class="img-fluid" style="height: 15em; width: 20em;">
                                            </div>
                                        </a>
                                        <div class="portfolio-info">
                                            <h4 class="title">
                                                <a href="{{ route('modul_detail', $modul->modul_id) }}">
                                                    <strong>{{ Str::limit($modul->name, 15, ' . . .') }}</strong>
                                                </a>
                                            </h4>
                                            <a href=""><p style="word-break: break-all">
                                                {{ Str::limit($modul->content, 30, ' . . .') }}</p></a>
                                        </div>
                                    </article>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->
                    <div class="page-header d-flex align-items-center mt-4">
                        <div class="container position-relative">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <a href="{{ route('modul') }}" class="btn text-light"
                                        style="background-color: teal"><strong>See more</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
@endsection
