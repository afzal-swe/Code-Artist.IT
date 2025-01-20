

@php
$we_haves = DB::table('we__haves')
    ->where('status', 1)
    ->limit(4)
    ->get();
@endphp

<section id="stats-counter" class="stats-counter section-bg">
    <div class="container">
      <div class="section-header">
        <h2>We Have</h2>
        {{-- <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p> --}}
      </div>
  
      <div class="row gy-4">
  
        @forelse ($we_haves as $row)
        <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex flex-column align-items-center justify-content-center w-100 h-100 text-center">
              <i class="{{ $row->icon }} color-blue flex-shrink-0"></i>
              <div>
                <span style="display: inline;" data-purecounter-start="0" data-purecounter-end="{{ $row->total }}" data-purecounter-duration="1" class="purecounter"></span><span style="display: inline;">+</span>
                <p><b>{{ $row->title ?? '' }}</b></p>
              </div>
            </div>
          </div><!-- End Stats Item -->
        @empty
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
        @endforelse
        
      </div>
  </section>