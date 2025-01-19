

@php
$sister_concerns = DB::table('sister__concerns')
    ->where('status', 1)
    ->orderBy('id', 'DESC')
    ->limit(6)
    ->get();
@endphp


<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Sister Concern of RSB</h2>
      </div>

      <div class="row gy-4">

        @forelse ($sister_concerns as $row)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="{{ $row->icon ?? '' }}"></i>
                    </div>
                    <h3>{{ Str::of($row->title ?? '')->limit(20) }}</h3>
                    <p>{!! Str::of($row->description ?? '')->limit(130) !!}</p>
                    <a href="#" class="readmore stretched-link d-flex justify-content-end">Learn more <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->
        @empty
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
        @endforelse
        

        
        {{-- <i class="fa-solid fa-arrow-up-from-ground-water"></i>
        <i class="fa-solid fa-compass-drafting"></i>
        <i class="fa-solid fa-trowel-bricks"></i>
        <i class="fa-solid fa-helmet-safety"></i>
        <i class="fa-solid fa-arrow-up-from-ground-water"></i> --}}
  
      </div>
    </div>
</section>