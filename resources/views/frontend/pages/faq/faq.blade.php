 
 @extends('frontend.layouts.app')
 @section('containt')
   
  @php
    $settings = DB::table('website_settings')->first();
  @endphp

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('frontend/assets/img/breadcrumbs-bg.jpg') }});">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>FAQ</h2>
      <ol>
        <li><a href="{{ route('home_page') }}">Home</a></li>
        <li>FAQ</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
  
     
        <div class="faq-container">
            <div class="faq-title" style="text-align: center;">Facts & Questions</div>
            <p style="text-align: center;"><i>Sample text. Click to select the text box.</i></p>
            
            @forelse ($faq as $row)
              <div class="faq-item">{{ $row->faq_questions }}<span class="icon">+</span></div>
              <div class="faq-content">{!! $row->faq_answers !!}</div>
            @empty
              <div class="faq-item">What factors should I consider when purchasing homeowners insurance? <span class="icon">+</span></div>
              <div class="faq-content">Consider coverage limits, deductibles, policy types, and exclusions.</div>
              
              <div class="faq-item">What are the policy limits in the standard homeowners policy? <span class="icon">+</span></div>
              <div class="faq-content">Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.Standard policies have different limits for dwelling, personal property, and liability.</div>
              
              <div class="faq-item">Where and when is my personal property covered? <span class="icon">+</span></div>
              <div class="faq-content">Personal property is usually covered at home and while traveling, subject to policy terms.</div>
              
              <div class="faq-item">Do I need earthquake coverage? How can I get it? <span class="icon">+</span></div>
              <div class="faq-content">Earthquake coverage is typically not included in standard policies but can be added separately.</div>
              
              <div class="faq-item">What does homeowners insurance cover? <span class="icon">+</span></div>
              <div class="faq-content">Covers damage to home, personal property, and liability protection.</div>
            @endforelse
           
        </div>
        
       
  
  </section><!-- End Contact Section -->
  @endsection