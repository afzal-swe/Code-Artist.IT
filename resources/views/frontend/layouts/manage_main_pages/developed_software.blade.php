


@php
// $all_development = DB::table('development__software')
//     ->where('status', 1)
//     ->orderBy('id', 'DESC')
//     ->get();
$softwares = DB::table('development__software')
    ->where('status', 1)
    ->where('development_options', 1)
    ->orderBy('id', 'DESC')
    ->get();
$mobile_apps = DB::table('development__software')
    ->where('status', 1)
    ->where('development_options', 2)
    ->orderBy('id', 'DESC')
    ->get();
$iot_devices = DB::table('development__software')
    ->where('status', 1)
    ->where('development_options', 3)
    ->orderBy('id', 'DESC')
    ->get();
$others = DB::table('development__software')
    ->where('status', 1)
    ->where('development_options', 4)
    ->orderBy('id', 'DESC')
    ->get();
@endphp

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





            @forelse ($softwares as $row)
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{ asset($row->image ?? '') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Software</h4>
                    <p>{{ $row->title ?? '' }}</p>
                    <a href="{{ asset($row->image ?? '') }}" title="Software" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ $row->link ?? '' }}" target="blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
            </div>
            @empty
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
            </div>
            @endforelse
          





            @forelse ($mobile_apps as $row)
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                <img src="{{ asset($row->image ?? '') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Mobile App</h4>
                    <p>{{ $row->title ?? '' }}</p>
                    <a href="{{ asset($row->image ?? '') }}" title="Mobile App" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ $row->link ?? '' }}" target="blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div>
            @empty
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
            </div>
            @endforelse

        



            @forelse ($iot_devices as $row)
            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{ asset($row->image ?? '') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>IoT Devices</h4>
                    <p>{{ $row->title ?? '' }}</p>
                    <a href="{{ asset($row->image ?? '') }}" title="IoT Devices" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ $row->link ?? '' }}" target="blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            @empty
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
              </div>
            @endforelse
         







            @forelse ($others as $row)
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{ asset($row->image ?? '') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Others</h4>
                    <p>{{ $row->title ?? '' }}</p>
                    <a href="{{ asset($row->image ?? '') }}" title="Others" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ $row->link ?? '' }}" target="blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            @empty
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
              </div>
            @endforelse
          


        </div><!-- End Projects Container -->
      </div>
    </div>
  </section>