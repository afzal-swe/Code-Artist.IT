@extends('frontend.layouts.app')
@section('containt')
@php
    $people_panels = DB::table('people__panels')->where('status',1)->where('people_anel',2)->get();
@endphp


<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('frontend/assets/img/breadcrumbs-bg.jpg') }});">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Managerial Panel</h2>
      <ol>
        <li><a href="{{ route('home_page') }}">Home</a></li>
        <li>About</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
      </div>

      <div class="row gy-5">
        @forelse ($people_panels as $row)
        <div class="col-lg-3 col-md-6 member" >
          <div class="member-img">
            <img src="{{ asset($row->image ?? '') }}" class="img-fluid" alt="{{$row->name ?? ''}}">
          </div>
          <div class="member-info text-center">
            <h4>{{$row->name ?? ''}}</h4>
            <span>{{$row->designation ?? ''}}</span>
            <div class="social">
              <a href="{{$row->linkdin ?? '#'}}"><i class="bi bi-linkedin"></i></a>
              <a href="{{$row->facebook ?? '#'}}"><i class="bi bi-facebook"></i></a>
              <a href="{{$row->instragram ?? '#'}}"><i class="bi bi-instagram"></i></a>
              <a href="{{$row->github ?? '#'}}"><i class="bi bi-github"></i></a>
              <a href="{{$row->website ?? '#'}}"><i class="fa-solid fa-globe"></i></a>
            </div>
          </div>
        </div>
        @empty
        <div class="col-lg-3 col-md-6 member" >
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="member-info text-center">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 member" >
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="member-info text-center">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 member">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="member-info text-center">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
        @endforelse
   
      </div>
    </div>
  </section><!-- End Our Team Section -->


@endsection