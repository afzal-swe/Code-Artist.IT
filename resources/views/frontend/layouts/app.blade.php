
@php
    $seo = DB::table('seos')->first();
    $settings = DB::table('website_settings')->first();
@endphp



<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $settings->website_name }}</title>


@isset($seo)
            
        
<meta property="og:type" content="Website">
<meta property="og:title" content="{{ $seo->meta_title }}">
<meta property="og:description" content="{{ $seo->meta_description }}">


<meta name="author" content="{{ $seo->meta_author }}">
<meta name="keyword" content="{{ $seo->meta_keyword }}">
<meta name="description" content="{{ $seo->meta_description }}">
<meta name="google-verification" content="{{ $seo->google_verification }}">
<meta name="google-analytics" content="{{ $seo->google_analytics }}">
<meta name="alexa-analytics" content="{{ $seo->alexa_analytics }}">
<title>{{ $seo->meta_title }}</title>
@endisset


  <!-- Favicons -->
  <link href="{{ asset($settings->favicon ?? 'frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset($settings->favicon ?? 'frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.partial.header')
  <!-- End Header -->

 

<!-- End #main -->
    @yield('containt');

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.partial.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>