

@php
$blogs = DB::table('blogs')
    ->join('users', 'blogs.user_id', '=', 'users.id') // Proper join syntax
    ->where('blogs.status', 1) // Scope for the 'blogs' table
    ->select('blogs.*', 'users.name as user_name', 'users.email as user_email') // Avoid ambiguous column names
    ->orderBy('blogs.id', 'DESC') // Explicit table prefix for clarity
    ->get();
@endphp




<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
    <div class=" section-header">
          <h2>Blogs</h2>
          <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>
  
        <div class="row gy-5">
  
            @forelse ($blogs as $row)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">
      
                  <div class="post-img position-relative overflow-hidden">
                    <img src="{{ asset($row->image ?? '') }}" class="img-fluid" alt="">
                    <span class="post-date">December 12</span>
                  </div>
      
                  <div class="post-content d-flex flex-column">
      
                    <h3 class="post-title">{{ $row->title ?? '' }}</h3>
      
                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">{{ $row->user_name ?? 'Unknown' }}</span>
                      </div>
                      {{-- <span class="px-3 text-black-50">/</span> --}}
                      {{-- <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                      </div> --}}
                    </div>
      
                    <hr>
                    <a href="{{ route('blog_details.page') }}" class="readmore stretched-link d-flex justify-content-end"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      
                  </div>
                </div>
              </div><!-- End post item -->
            @empty
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">
      
                  <div class="post-img position-relative overflow-hidden">
                    <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
                    <span class="post-date">December 12</span>
                  </div>
      
                  <div class="post-content d-flex flex-column">
      
                    <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
      
                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                      </div>
                      <span class="px-3 text-black-50">/</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                      </div>
                    </div>
      
                    <hr>
                    <a href="blog-details.html" class="readmore stretched-link d-flex justify-content-end"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      
                  </div>
                </div>
              </div><!-- End post item -->
            @endforelse
          
        </div>
    </div>
</section>