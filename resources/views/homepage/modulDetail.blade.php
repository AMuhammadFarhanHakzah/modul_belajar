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

                            <h2 class="name"><strong>{{ $modul->name }}</strong></h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Irfan</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time
                                                datetime="2020-01-01"> {{ $modul->updated_at }} </time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="action mt-4">
                                <div class="btn" style="background-color: teal;">
                                    <i class="bi bi-eye-fill" style="color: white;"></i><a
                                        href="{{ route('modulView', $modul->modul_id) }}" class="text-light">
                                        <strong>View Full Document</strong></a>
                                </div>
                                @if (auth()->check())
                                    @if (auth()->user())
                                        <div class="btn" style="background-color: cyan;">
                                            <i class="bi bi-cloud-arrow-down"></i>
                                            <a href="{{ asset($modul->full_document) }}" class="text-dark">
                                                <strong> Download Full</strong></a>
                                        </div>
                                        <div class="btn" style="background-color: cyan;">
                                            <i class="bi bi-cloud-arrow-down"></i>
                                            <a href="{{ asset($modul->lks_document) }}" class="text-dark">
                                                <strong> Download LKS</strong></a>
                                        </div>
                                    @endif
                                @else
                                    <div class="btn" style="background-color: cyan;">
                                        <i class="bi bi-cloud-arrow-down"></i>
                                        <a href="{{ route('login', ['redirect' => url()->current()]) }}" class="text-dark">
                                            <strong> Download Full</strong></a>
                                    </div>
                                    <div class="btn" style="background-color: cyan;">
                                        <i class="bi bi-cloud-arrow-down"></i>
                                        <a href="{{ route('login', ['redirect' => url()->current()]) }}" class="text-dark">
                                            <strong> Download LKS</strong></a>
                                    </div>
                                @endif
                            </div>

                            <div class="content">
                                <h2 class="title">{{ $modul->title }}
                                </h2>
                                <p>
                                    {{ $modul->content }}
                                </p>
                            </div><!-- End post content -->

                        </article><!-- End blog post -->


                        <div class="comments">

                            <div class="reply-form">

                                <h4>Leave a feedback</h4>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn text-light" style="background-color: #1f1f1f;">Post
                                    Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Modul</h3>

                                <div class="mt-3">

                                    <div class="post-item mt-3">
                                        <img src="{{ asset('assets/img/blog/blog-recent-1.jpg') }}" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('assets/img/blog/blog-recent-2.jpg') }}" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('assets/img/blog/blog-recent-3.jpg') }}" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati
                                                    ut</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('assets/img/blog/blog-recent-4.jpg') }}" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('assets/img/blog/blog-recent-5.jpg') }}" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a>
                                            </h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>
            </div>

        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
