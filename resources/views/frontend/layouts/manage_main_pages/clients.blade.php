
@php
    $clients = DB::table('clients')
    ->where('status',1)
    ->orderBy('id', 'DESC')
    ->get();
@endphp


<section class="top_brand section_padding">
    <div class="container">
        <div class="section-header">
            <h2>Our Honorable Clients</h2>
            <p>Trusted by some of the world's top brands</p>
        </div>
        <div class="top_brand_content">
            <div class="top_brand_slider swiper-container">
                <div class="swiper-wrapper">
                    @forelse ($clients as $row)
                    <a href="#" class="top_brand_item swiper-slide">
                        <div class="top_brand_image">
                            <img src="{{ asset($row->image ?? '') }}" alt="{{ $row->title ?? '' }}">
                        </div>
                        <div class="brand_item_name">{{ $row->title ?? '' }}</div>
                    </a>
                    @empty
                    <a href="" class="top_brand_item swiper-slide">
                        <div class="top_brand_image">
                            <img src="{{ asset('frontend/image/brand/FOSSIL.png') }}" alt="">
                        </div>
                        <div class="brand_item_name">Fossil</div>
                    </a>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>



