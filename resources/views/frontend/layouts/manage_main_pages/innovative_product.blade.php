

@php
$innovative_products = DB::table('innovative__products')
    ->where('status', 1)
    ->orderBy('id', 'DESC')
    ->limit(4)
    ->get();
@endphp



<section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Innovative Products</h2>
        
      </div>

      <div class="row gy-4">

        
        @forelse ($innovative_products as $row)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-item">
                <div class="row">
                    <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url({{ asset($row->products_img ?? '') }});"></div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                        <h4 class="card-title">{{ Str::of($row->title)->limit(24) }}</h4>
                        <p>{!! Str::of($row->description ?? '')->limit(160) !!}</p>
                        <div class="d-flex justify-content-end mt-2">
                        <div class="btn bg-info-subtle">
                            <a href="#" class="readmore stretched-link"><b>Order Now</b></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @empty
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
            </div>
        @endforelse

      </div>
    </div>
  </section>