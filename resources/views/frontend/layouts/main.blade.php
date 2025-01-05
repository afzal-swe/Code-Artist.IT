
@extends('frontend.layouts.app')
@section('containt')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero">

    {{-- <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div> --}}

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url({{ asset('frontend/assets/img/hero-carousel/hero-carousel-1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/hero-carousel/hero-carousel-2.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/hero-carousel/hero-carousel-3.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/hero-carousel/hero-carousel-4.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/hero-carousel/hero-carousel-5.jpg') }})"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->


<main id="main">

   <!-- ======= Testimonials Section ======= -->
   <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Best Services & Client Feedbacks</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
      </div>

      <div class="slides-2 swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Innovative Products</h2>
          
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('frontend/assets/img/constructions-2.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                    <div class="d-flex justify-content-end mt-2">
                      <div class="btn bg-info-subtle">
                        <a href="#" class="readmore stretched-link"><b>Order Now</b></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('frontend/assets/img/constructions-2.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                    <div class="d-flex justify-content-end mt-2">
                      <div class="btn bg-info-subtle">
                        <a href="#" class="readmore stretched-link"><b>Order Now</b></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('frontend/assets/img/constructions-3.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Error beatae dolor inventore aut</h4>
                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                    <div class="d-flex justify-content-end mt-2">
                      <div class="btn bg-info-subtle">
                        <a href="#" class="readmore stretched-link"><b>Order Now</b></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('frontend/assets/img/constructions-4.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                    <div class="d-flex justify-content-end mt-2">
                      <div class="btn bg-info-subtle">
                        <a href="#" class="readmore stretched-link"><b>Order Now</b></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sister Concern of RSB</h2>
          
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="service-details.html" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="service-details.html" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="service-details.html" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Asperiores Commodit</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="service-details.html" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Velit Doloremque</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="service-details.html" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="service-details.html" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

  

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Timelines</h2>
          
        </div>

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Recent Services</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Running Orders</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Recent Events</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Upcoming Events</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('frontend/assets/img/features-1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Neque exercitationem debitis</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('frontend/assets/img/features-2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatibus commodi accusamu</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('frontend/assets/img/features-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Omnis fugiat ea explicabo sunt</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('frontend/assets/img/features-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Developed Software Demos</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Softwares</li>
            <li data-filter=".filter-construction">Mobile Apps</li>
            <li data-filter=".filter-repairs">IoT Devices</li>
            <li data-filter=".filter-design">Others</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/remodeling-1.jpg') }}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/construction-1.jpg') }}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/repairs-1.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/design-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/design-1.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/remodeling-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/remodeling-2.jpg') }}" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/construction-2.jpg') }}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/repairs-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/repairs-2.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/design-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/design-2.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/remodeling-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/remodeling-3.jpg') }}" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/construction-3.jpg') }}" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/repairs-3.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('frontend/assets/img/projects/design-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('frontend/assets/img/projects/design-3.jpg') }}" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

   

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">

    
    
  <div class=" section-header">
        <h2>Blogs</h2>
        <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('frontend/assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt="">
              <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('frontend/assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt="">
              <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->





   



  <style>
    /* General styles */
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.section_padding {
    padding: 50px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.section_title_wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.section_heading {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.brand_sliderarrow {
    cursor: pointer;
    display: flex;
    gap: 10px;
}

.brand_sliderarrow::before,
.brand_sliderarrow::after {
    content: '';
    width: 15px;
    height: 15px;
    background: #333;
    clip-path: polygon(100% 0, 0 50%, 100% 100%);
    display: block;
}

.brand_sliderarrow::after {
    transform: rotate(180deg);
}

/* Slider styles */
.top_brand_slider {
    display: flex;
    overflow: hidden;
    position: relative;
    scroll-behavior: smooth;
}

.top_brand_item {
    flex: 0 0 150px;
    margin-right: 15px;
    text-align: center;
    text-decoration: none;
    color: #333;
    background: #f9f9f9;
    padding: 10px;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

.top_brand_item:hover {
    transform: scale(1.1);
}

.top_brand_image img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.brand_item_name {
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
}

/* Slider navigation */
.slider_nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
}

.slider_nav.left {
    left: 10px;
}

.slider_nav.right {
    right: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .top_brand_item {
        flex: 0 0 150px;
    }

    .section_heading {
        font-size: 20px;
    }
}

  </style>

   <!-- top brand -->
   <section class="top_brand section_padding">
    <div class="container">
      <div class="section-header">
        <h2>Our Expartics</h2>
       
      </div>
        <!-- top brand content -->
        <div class="top_brand_content">
          
            <!-- slider -->
            <div class="top_brand_slider">
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/FOSSIL.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Fossil</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/KALYA_SHASTRA.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Lenovo</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/LAKME.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">LAKME</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/lavie.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">lavie</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/oneplus.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">oneplus</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/PUMA.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">PUMA</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/samsung1.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Samsung</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/ADIDAS.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Adidas</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/apple.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Apple</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Fizzy Goblet</div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <script>
      // Select the slider container

// Select the slider container
const slider = document.querySelector('.top_brand_slider');

// Create pagination buttons
const sliderButtonsContainer = document.createElement('div');
sliderButtonsContainer.classList.add('slider_buttons');

const topBrandItems = document.querySelectorAll('.top_brand_item');
topBrandItems.forEach((_, index) => {
    const button = document.createElement('div');
    button.classList.add('slider_button');
    if (index === 0) button.classList.add('active');
    sliderButtonsContainer.appendChild(button);
});

slider.parentElement.appendChild(sliderButtonsContainer);

// Auto-slide functionality
let scrollAmount = 0;
const slideInterval = 3000; // Time in milliseconds
let currentIndex = 0;

function autoSlide() {
    const maxScroll = slider.scrollWidth - slider.clientWidth;

    // Scroll the slider
    if (scrollAmount < maxScroll) {
        scrollAmount += 200; // Adjust scroll step as needed
        slider.scrollBy({ left: 200, behavior: 'smooth' });
        updateActiveButton();
    } else {
        // Reset to the beginning when reaching the end
        scrollAmount = 0;
        slider.scrollTo({ left: 0, behavior: 'smooth' });
        currentIndex = 0;
        updateActiveButton();
    }
}

function updateActiveButton() {
    const buttons = document.querySelectorAll('.slider_button');
    buttons.forEach((button, index) => {
        button.classList.toggle('active', index === currentIndex);
    });
    currentIndex = (currentIndex + 1) % topBrandItems.length;
}

// Start the auto-slide
setInterval(autoSlide, slideInterval);
    </script>
</section>
<!-- top brand end -->




 <!-- ======= Stats Counter Section ======= -->
 <section id="stats-counter" class="stats-counter section-bg">
  <div class="container">
    <div class="section-header">
      <h2>We Have</h2>
      {{-- <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p> --}}
    </div>

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="420" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Happy Clients</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="499" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Successful Delivery</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-people color-pink flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end=" 45" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Exparts</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-headset color-green flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="  4" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Years of Experience</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->
    </div>
</section><!-- End Stats Counter Section -->


<style>


/* General section styles */
#brands {
  padding: 60px 0;
  background: #f7f7f7;
}

#brands .section-header {
  text-align: center;
  margin-bottom: 40px;
}

#brands .section-header h2 {
  font-size: 32px;
  font-weight: 600;
  color: #333;
}

#brands .section-header p {
  font-size: 16px;
  color: #666;
  margin-top: 10px;
}

/* Swiper container */
.swiper {
  width: 100%;
  padding-top: 20px;
  padding-bottom: 40px;
}

/* Swiper slides */
.swiper-slide {
  /* /* flex: 0 0 150px; */
    margin-right: 15px;
    text-align: center;
    text-decoration: none;
    color: #333;
    background: #f9f9f9;
    padding: 10px;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out; */
  /* display: flex; */
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.swiper-slide:hover {
  transform: scale(1.05);
}

/* Brand item */
.brand-item {
  padding: 20px;
}

.brand-item img.brand-img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
  object-fit: contain;
}

/* Swiper pagination */
.swiper-pagination {
  text-align: center;
  margin-top: 20px;
}

.swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background: #999;
  opacity: 0.7;
  margin: 0 5px;
  border-radius: 50%;
  transition: opacity 0.3s, transform 0.3s;
}

.swiper-pagination-bullet-active {
  background: #333;
  opacity: 1;
  transform: scale(1.2);
}

</style>

<section id="brands" class="brands section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Our Honorable Clients</h2>
      <p>Trusted by some of the world's top brands</p>
    </div>

    <div class="slides-2 swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 1">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 2">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 3">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 4">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 5">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper", {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  });
</script>


</section>

<section class="top_brand section_padding">
  <div class="container">
    <div class="section-header">
      <h2>Our Service Areas</h2>
     
    </div>
      <!-- top brand content -->
      <div class="top_brand_content">
        
          <!-- slider -->
          <div class="top_brand_slider">
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/FOSSIL.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Fossil</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/KALYA_SHASTRA.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Lenovo</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/LAKME.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">LAKME</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/lavie.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">lavie</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/oneplus.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">oneplus</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/PUMA.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">PUMA</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/samsung1.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Samsung</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/ADIDAS.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Adidas</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/apple.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Apple</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Fizzy Goblet</div>
              </a>
          </div>
      </div>
      <div class="swiper-pagination"></div>
  </div>

</section>


</main>

@endsection