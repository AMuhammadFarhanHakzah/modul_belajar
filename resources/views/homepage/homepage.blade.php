@extends('layouts.home')
@section('content')


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2 >Welcome to <br><span>Modulez</span></h2>
        <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="{{route('modul')}}" class="btn-get-started">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/Business_PP1125_generated.jpg" class="img-fluid" style="border-radius: 50em;" alt="" data-aos="zoom-out" data-aos-delay="100">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

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

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-geo-alt"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-command"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
          </div>
        </div><!--End Icon Box -->

      </div>
    </div>
  </div>

  </div>
</section>
<!-- End Hero Section -->

<main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>About Us</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-6">
          <h3>Voluptatem dignissimos provident quasi corporis</h3>
          <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
          <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
          <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
        </div>
        <div class="col-lg-6">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>

            <div class="position-relative mt-4">
              <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4 align-items-center">

        <div class="col-lg-6">
          <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6">

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
          </div><!-- End Stats Item -->

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
          </div><!-- End Stats Item -->

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </div>
  </section><!-- End Stats Counter Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="Modul" class="document sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Modul</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->



<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>



@endsection