@extends('frontend.layouts.app')
@section('containt')


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

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
            <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-5.jpg') }}" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Brian Doe</h4>
            <span>Marketing</span>
            <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
          <div class="member-img">
            <img src="{{ asset('frontend/assets/img/team/team-6.jpg') }}" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Josepha Palas</h4>
            <span>Operation</span>
            <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Our Team Section -->


@endsection