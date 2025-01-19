@php
$banners = DB::table('banners')
    ->where('status', 1)
    ->orderBy('id', 'DESC')
    ->get();
@endphp

<section id="hero" class="hero">
 <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

   @forelse ($banners as $index => $banner)
        <div 
            class="carousel-item {{ $index === 0 ? 'active' : '' }}" 
            style="background-image: url('{{ asset($banner->banner_img) }}');">
        </div>
    @empty
        <div 
            class="carousel-item active" 
            style="background-image: url('{{ asset('frontend/assets/img/hero-carousel/hero-carousel-1.jpg') }}');">
        </div>
    @endforelse

   <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
     <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
   </a>

   <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
     <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
   </a>

 </div>
</section>