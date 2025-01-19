

@php
$feedbacks = DB::table('client__feedback')
    ->where('status', 1)
    ->orderBy('id', 'DESC')
    ->get();
@endphp

<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Best Services & Client Feedbacks</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
      </div>

      <div class="slides-2 swiper">
        <div class="swiper-wrapper">

        @forelse ($feedbacks as $index => $feedback)
            <div class="swiper-slide">
                <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="{{ asset($feedback->client_img ?? '') }}" class="testimonial-img" alt="">
                    <h3>{{ $feedback->name ?? '' }}</h3>
                    <h4>{{ $feedback->designation ?? '' }}</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    {!! $feedback->description ?? '' !!}
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div>
            </div>
        @empty
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
            </div>
        @endforelse
          
          <!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
</section>