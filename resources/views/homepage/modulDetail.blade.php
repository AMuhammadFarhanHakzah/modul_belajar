@extends('layouts.home')
@section('content')
    <main id="main">

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-down">
                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            {{-- <div class="post-img">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div> --}}

                            <h2 class="name" style="word-break: break-all"><strong>{{ $modul->name }}</strong></h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Irfan</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time
                                                datetime="2020-01-01"> {{ $modul->updated_at }} </time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="action mt-4">
                                @if (auth()->check())
                                    @if (auth()->user())
                                        <div class="btn mt-2" style="background-color: teal;">
                                            <i class="bi bi-eye-fill" style="color: white;"></i>
                                            <a href="{{ route('viewModul', $modul->full_document) }}" class="text-light">
                                                <strong>Full Document</strong>
                                            </a>
                                        </div>
                                        <div class="btn mt-2" style="background-color: cyan;">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                            <a href="{{ $modul->lks_document }}" class="text-dark">
                                                <strong>Kerja LKS</strong></a>
                                        </div>
                                    @endif
                                @else
                                    <div class="btn mt-2" style="background-color: teal;">
                                        <i class="bi bi-eye-fill" style="color: white;"></i>
                                        <a href="{{ route('login', ['redirect' => url()->current()]) }}" class="text-light">
                                            <strong>Full Document</strong>
                                        </a>
                                    </div>
                                    <div class="btn mt-2" style="background-color: cyan;">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                        <a href="{{ route('login', ['redirect' => url()->current()]) }}" class="text-dark">
                                            <strong>Kerja LKS</strong></a>
                                    </div>
                                @endif
                            </div>

                            <div class="content">
                                <h2 class="title" style="word-break: break-all">{{ $modul->title }}
                                </h2>
                                <p style="word-break: break-all">
                                    {{ $modul->content }}
                                </p>
                            </div><!-- End post content -->

                        </article><!-- End blog post -->


                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Modul</h3>

                                <div class="mt-3">

                                    @foreach ($latestModul as $latest)
                                        <div class="post-item mt-3">
                                            <a href="{{ route('modul_detail', $latest->modul_id) }}">
                                                <img src="/document/fotoStorage/{{ $latest->foto }}" alt=""
                                                    style="width: 5em; height: 5em;">
                                            </a>
                                            <div>
                                                <h4><a href="{{ route('modul_detail', $latest->modul_id) }}"
                                                        style="word-break: break-all">{{ Str::limit($latest->name, 15, ' . . .') }}</a>
                                                </h4>
                                                <time>{{ $latest->updated_at }}</time>
                                            </div>
                                        </div><!-- End recent post item-->
                                        <br>
                                    @endforeach

                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>
            </div>

        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
