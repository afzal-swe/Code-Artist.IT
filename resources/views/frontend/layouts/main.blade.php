
@extends('frontend.layouts.app')
@section('containt')

 <!-- ======= Banner Section ======= -->
  @include('frontend.layouts.manage_main_pages.banner')


<main id="main">

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





   



  <style>
    /* General styles */
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.section_padding {
    padding: 50px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.section_title_wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.section_heading {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.brand_sliderarrow {
    cursor: pointer;
    display: flex;
    gap: 10px;
}

.brand_sliderarrow::before,
.brand_sliderarrow::after {
    content: '';
    width: 15px;
    height: 15px;
    background: #333;
    clip-path: polygon(100% 0, 0 50%, 100% 100%);
    display: block;
}

.brand_sliderarrow::after {
    transform: rotate(180deg);
}

/* Slider styles */
.top_brand_slider {
    display: flex;
    overflow: hidden;
    position: relative;
    scroll-behavior: smooth;
}

.top_brand_item {
    flex: 0 0 150px;
    margin-right: 15px;
    text-align: center;
    text-decoration: none;
    color: #333;
    background: #f9f9f9;
    padding: 10px;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

.top_brand_item:hover {
    transform: scale(1.1);
}

.top_brand_image img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.brand_item_name {
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
}

/* Slider navigation */
.slider_nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
}

.slider_nav.left {
    left: 10px;
}

.slider_nav.right {
    right: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .top_brand_item {
        flex: 0 0 150px;
    }

    .section_heading {
        font-size: 20px;
    }
}

  </style>

   <!-- top brand -->
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
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/FOSSIL.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Fossil</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/KALYA_SHASTRA.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Lenovo</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/LAKME.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">LAKME</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/lavie.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">lavie</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/oneplus.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">oneplus</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/PUMA.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">PUMA</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/samsung1.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Samsung</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/ADIDAS.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Adidas</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/apple.jpg') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Apple</div>
                </a>
                <!-- item -->
                <a href="" class="top_brand_item">
                    <!-- image -->
                    <div class="top_brand_image">
                        <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" alt="">
                    </div>
                    <!-- top brand name -->
                    <div class="brand_item_name">Fizzy Goblet</div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <script>
      // Select the slider container

// Select the slider container
const slider = document.querySelector('.top_brand_slider');

// Create pagination buttons
const sliderButtonsContainer = document.createElement('div');
sliderButtonsContainer.classList.add('slider_buttons');

const topBrandItems = document.querySelectorAll('.top_brand_item');
topBrandItems.forEach((_, index) => {
    const button = document.createElement('div');
    button.classList.add('slider_button');
    if (index === 0) button.classList.add('active');
    sliderButtonsContainer.appendChild(button);
});

slider.parentElement.appendChild(sliderButtonsContainer);

// Auto-slide functionality
let scrollAmount = 0;
const slideInterval = 3000; // Time in milliseconds
let currentIndex = 0;

function autoSlide() {
    const maxScroll = slider.scrollWidth - slider.clientWidth;

    // Scroll the slider
    if (scrollAmount < maxScroll) {
        scrollAmount += 200; // Adjust scroll step as needed
        slider.scrollBy({ left: 200, behavior: 'smooth' });
        updateActiveButton();
    } else {
        // Reset to the beginning when reaching the end
        scrollAmount = 0;
        slider.scrollTo({ left: 0, behavior: 'smooth' });
        currentIndex = 0;
        updateActiveButton();
    }
}

function updateActiveButton() {
    const buttons = document.querySelectorAll('.slider_button');
    buttons.forEach((button, index) => {
        button.classList.toggle('active', index === currentIndex);
    });
    currentIndex = (currentIndex + 1) % topBrandItems.length;
}

// Start the auto-slide
setInterval(autoSlide, slideInterval);
    </script>
</section>
<!-- top brand end -->




 <!-- ======= Stats Counter Section ======= -->
 <section id="stats-counter" class="stats-counter section-bg">
  <div class="container">
    <div class="section-header">
      <h2>We Have</h2>
      {{-- <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p> --}}
    </div>

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="420" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Happy Clients</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="499" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Successful Delivery</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-people color-pink flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end=" 45" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Exparts</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
          <i class="bi bi-headset color-green flex-shrink-0"></i>
          <div>
            <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="  4" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
            <p><b>Years of Experience</b></p>
          </div>
        </div>
      </div><!-- End Stats Item -->
    </div>
</section><!-- End Stats Counter Section -->


<style>


/* General section styles */
#brands {
  padding: 60px 0;
  background: #f7f7f7;
}

#brands .section-header {
  text-align: center;
  margin-bottom: 40px;
}

#brands .section-header h2 {
  font-size: 32px;
  font-weight: 600;
  color: #333;
}

#brands .section-header p {
  font-size: 16px;
  color: #666;
  margin-top: 10px;
}

/* Swiper container */
.swiper {
  width: 100%;
  padding-top: 20px;
  padding-bottom: 40px;
}

/* Swiper slides */
.swiper-slide {
  /* /* flex: 0 0 150px; */
    margin-right: 15px;
    text-align: center;
    text-decoration: none;
    color: #333;
    background: #f9f9f9;
    padding: 10px;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out; */
  /* display: flex; */
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.swiper-slide:hover {
  transform: scale(1.05);
}

/* Brand item */
.brand-item {
  padding: 20px;
}

.brand-item img.brand-img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
  object-fit: contain;
}

/* Swiper pagination */
.swiper-pagination {
  text-align: center;
  margin-top: 20px;
}

.swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background: #999;
  opacity: 0.7;
  margin: 0 5px;
  border-radius: 50%;
  transition: opacity 0.3s, transform 0.3s;
}

.swiper-pagination-bullet-active {
  background: #333;
  opacity: 1;
  transform: scale(1.2);
}

</style>

<section id="brands" class="brands section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Our Honorable Clients</h2>
      <p>Trusted by some of the world's top brands</p>
    </div>

    <div class="slides-2 swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 1">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 2">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 3">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 4">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="brand-item">
            <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" class="brand-img" alt="Brand 5">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper", {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  });
</script>


</section>

<section class="top_brand section_padding">
  <div class="container">
    <div class="section-header">
      <h2>Our Service Areas</h2>
     
    </div>
      <!-- top brand content -->
      <div class="top_brand_content">
        
          <!-- slider -->
          <div class="top_brand_slider">
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/FOSSIL.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Fossil</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/KALYA_SHASTRA.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Lenovo</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/LAKME.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">LAKME</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/lavie.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">lavie</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/oneplus.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">oneplus</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/PUMA.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">PUMA</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/samsung1.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Samsung</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/ADIDAS.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Adidas</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/apple.jpg') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Apple</div>
              </a>
              <!-- item -->
              <a href="" class="top_brand_item">
                  <!-- image -->
                  <div class="top_brand_image">
                      <img src="{{ asset('frontend/image/brand/FIZZY_GOBLET.png') }}" alt="">
                  </div>
                  <!-- top brand name -->
                  <div class="brand_item_name">Fizzy Goblet</div>
              </a>
          </div>
      </div>
      <div class="swiper-pagination"></div>
  </div>

</section>


</main>

@endsection