@extends('layouts.home')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2><strong>Modul</strong></h2>
                            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                                consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione
                                sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Modul</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">


                <div class="card-body mb-4">
                    <form action="{{ route('modulSearch') }}" method="GET">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name='key' id='key' placeholder="Search modul" value="{{ $cari ?? '' }}">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary" style="border-radius: 4em"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="row gy-4 posts-list">
                    @foreach ($moduls as $modul)
                        <div class="col-xl-4 col-md-6">
                            <article>
                                <a href="{{ route('modul_detail', $modul->modul_id) }}">
                                    <div class="post-img">
                                        <img src="document/fotoStorage/{{ $modul->foto }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </a>

                                <h2 class="title">
                                    <a href="{{ route('modul_detail', $modul->modul_id) }}">
                                        {{ Str::limit($modul->name, 15, ' . . .') }}
                                    </a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/blog-author-5.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">Irfan</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">{{ $modul->created_at }}</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach
                    {{ $moduls->links() }}
                </div><!-- End blog posts list -->


                {{-- <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End blog pagination --> --}}

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
