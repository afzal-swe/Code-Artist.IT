



@php
$recent_services = DB::table('our__timelines')
    ->where('status', 1)
    ->where('timeline_options',1)
    ->orderBy('id', 'DESC')
    ->limit(1)
    ->get();
$running_orders = DB::table('our__timelines')
    ->where('status', 1)
    ->where('timeline_options',2)
    ->orderBy('id', 'DESC')
    ->limit(1)
    ->get();
$recent_events = DB::table('our__timelines')
    ->where('status', 1)
    ->where('timeline_options',3)
    ->orderBy('id', 'DESC')
    ->limit(1)
    ->get();
$upcoming_events = DB::table('our__timelines')
    ->where('status', 1)
    ->where('timeline_options',4)
    ->orderBy('id', 'DESC')
    ->limit(1)
    ->get();
@endphp



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

        @forelse ($recent_services as $row)
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h3>{{ $row->title ?? '' }}</h3>
                        <p class="fst-italic">{!! $row->description ?? '' !!} </p>
                        
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset($row->image ?? '') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        @empty
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
            </div>
        @endforelse

        





        @forelse ($running_orders as $row)
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>{{ $row->title ?? '' }}</h3>
                        <p class="fst-italic">{!! $row->description ?? '' !!} </p>
                        
                        
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset($row->image ?? '') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        @empty
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
            </div>
        @endforelse
        




        @forelse ($recent_events as $row)
        <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>{{ $row->title ?? '' }}</h3>
                <p class="fst-italic">{!! $row->description ?? '' !!} </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset($row->image ?? '') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        @empty
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
          </div>
        @endforelse
       



        @forelse ($upcoming_events as $row)
        <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>{{ $row->title ?? '' }}</h3>
                <p class="fst-italic">{!! $row->description ?? '' !!} </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset($row->image ?? '') }}" alt="" class="img-fluid">
              </div>
            </div>
        </div>
        @empty
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
        </div>
        @endforelse
        
      </div>
    </div>
</section>