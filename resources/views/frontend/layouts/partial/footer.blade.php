

@php
  $settings = DB::table('website_settings')->first();
  $socials = DB::table('socials')->first();
@endphp
{{-- @dd($settings); --}}


<footer id="footer" class="footer">
    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>{{ $settings->website_name }}</h3>
              <p>
                {{ $settings->address }}<br>
               
                <strong>Phone:</strong>  {{ $settings->phone_one }}<br>
                <strong>Email:</strong> {{ $settings->main_email }}<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="{{ $socials->facebook ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="{{ $socials->instagram ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="{{ $socials->linkedin ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                <a href="{{ $socials->youtube ?? '#' }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4 class="text-info">Useful Links</h4><hr>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          
          <div class="col-lg-3 col-md-3 footer-links">
            <h4 class="text-info">Website Development</h4><hr>
            <ul>
              <li><a href="#">Website Development Service</a></li>
              <li><a href="#">E-Commerce Website Development</a></li>
              <li><a href="#">Mobile App Development</a></li>
              <li><a href="#">Classified Website Development</a></li>
              <li><a href="#">Hotel Booking Website Development</a></li>
              <li><a href="#">Garments Accessories Manufacturer ERP</a></li>
              <li><a href="#">Salesforce-Supply Chain Management</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-3 footer-links">
            <h4 class="text-info">Software Development</h4><hr>
            <ul >
              <li><a href="#">Human Resource Management</a></li>
              <li><a href="#">Garments ERP</a></li>
              <li><a href="#">Hospital Management Software</a></li>
              <li><a href="#">School Management Software</a></li>
              <li><a href="#">Account Management System</a></li>
              <li><a href="#">Hotel Management Software</a></li>
              <li><a href="#">Point of Sale Software</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Robo Soluations BD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
         
        </div>
      </div>
    </div>

  </footer>