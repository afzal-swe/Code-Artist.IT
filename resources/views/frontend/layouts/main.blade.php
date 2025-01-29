
@extends('frontend.layouts.app')
@section('containt')

 <!-- ======= Banner Section ======= -->
 
  @include('frontend.layouts.manage_main_pages.banner')


<main id="main">

  <div class="whatrsapp_float">

    <a href="https://wa.me/+8801701558100" target="_blank">
      <img src="{{ asset('frontend/image/whatsapp.png') }}" alt="" width="55px;">
    </a>
  </div>

  <!-- ======= Testimonials Section ======= -->
   @include('frontend.layouts.manage_main_pages.feedback')
  <!-- End Testimonials Section -->

  <!-- ======= Innovative Products Section ======= -->
  @include('frontend.layouts.manage_main_pages.innovative_product')
  <!-- End Innovative Products Section -->

  <!-- ======= Sister Concern Section ======= -->
  @include('frontend.layouts.manage_main_pages.sister_concern')
  <!-- End Sister Concern Section -->

  <!-- ======= Our Timelines Section ======= -->
  @include('frontend.layouts.manage_main_pages.our_timeline')
  <!-- End Our Timelines Section -->

  <!-- ======= Developed Software Section ======= -->
  @include('frontend.layouts.manage_main_pages.developed_software')
  <!-- End Our Projects Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  @include('frontend.layouts.manage_main_pages.blog')
  <!-- End Recent Blog Posts Section -->

  <!-- Expartics -->
  @include('frontend.layouts.manage_main_pages.expartics')
  <!-- Expartics end -->

  <!-- ======= We Have Section ======= -->
  @include('frontend.layouts.manage_main_pages.we_have')
  <!-- End We Have Section -->

  {{-- Our Honorable Clients  --}}
  @include('frontend.layouts.manage_main_pages.clients')
  {{-- End Our Honorable Clients  --}}

  {{-- Our Service Areas --}}
  @include('frontend.layouts.manage_main_pages.service_areas')
  {{-- Our Service Areas --}}

</main>
@endsection