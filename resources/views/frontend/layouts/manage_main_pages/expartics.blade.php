


@php
    $expartics = DB::table('our__expartics')
    ->where('status',1)
    ->orderBy('id', 'DESC')
    ->get();
@endphp


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
                @forelse ($expartics as $row)
                <a href="#" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset($row->image ?? '') }}" alt="{{ $row->title ?? '' }}">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">{{ $row->title ?? '' }}</div>
                </a>
                @empty
                <a href="#" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/FOSSIL.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Fossil</div>
                </a>
                @endforelse
               
                <!-- item -->
                
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</section>