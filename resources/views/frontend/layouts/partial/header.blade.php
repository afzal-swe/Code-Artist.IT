<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Robo Soluations BD<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">

        
        <ul>
          <li><a href="{{ route('home_page') }}">Home</a></li>
          <li class="dropdown"><a href="#"><span>About RSB</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('about.page') }}">About Us</a></li>
              <li><a href="#">Our Portfolio</a></li>
              <li><a href="#">Carrrer</a></li>
              <li><a href="#">Become an Affiliator</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>People</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Advisory Panel</a></li>
              <li><a href="#">Managerial Panel</a></li>
              <li><a href="#">Full Time Employee</a></li>
              <li><a href="#">Project Based Employee</a></li>
              <li><a href="#">Intern</a></li>
            </ul>
          </li>

          
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              {{-- <li><a href="#">Dropdown 1</a></li> --}}
              <li class="dropdown"><a href="#"><span>Project Thesis & IT Contsultancy</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Embedded System & IoT</a></li>
                  <li><a href="#">Robotics & Electronics</a></li>
                  <li><a href="#">AI,ML,NLP & Deep Learning</a></li>
                  <li><a href="#">Web & Mobile Apps</a></li>
                  <li><a href="#">Based on Client Requirements</a></li>
              
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Website Development</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">E-commerce Site</a></li>
                  <li><a href="#">Portfolio & Companny Profile</a></li>
                  <li><a href="#">All Management System</a></li>
                  <li><a href="#">News Portal</a></li>
                  <li><a href="#">Based on Client Requirements</a></li>
                  
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Software Development</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">POS (Point of Sale) System</a></li>
                  <li><a href="#">ERP System</a></li>
                  <li><a href="#">IoT Based Software</a></li>
                  <li><a href="#">Based on Client Requirements</a></li>
                  
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Mobile Apps Development</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Any Web View (Android & iOS)</a></li>
                  <li><a href="#">IoT Based (Android & iOS)</a></li>
                  <li><a href="#">Based on Client Requirements</a></li>
                 
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Digital Marketing</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">SEO & Content Writing</a></li>
                  <li><a href="#">Social Media Boosting</a></li>
                  <li><a href="#">SMS & Email Marketing</a></li>
                  <li><a href="#">UI/UX Design</a></li>
                </ul>
              </li>

              
              <li class="dropdown"><a href="#"><span>Domain & Hosting</span></a></li>
              
              <li class="dropdown"><a href="#"><span>Other Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Robotics Componentens</a></li>
                  <li><a href="#">Customized Gift Items</a></li>
                  <li><a href="#">3D Design & Printing</a></li>
                 
                </ul>
              </li>
             
            </ul>
          </li>

          
 
          
          <li class="dropdown"><a href="#"><span>Research & Project</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Published Research Paper</a></li>
              <li><a href="#">Ongoing Research Paper</a></li>
              <li><a href="#">Completed Project</a></li>
              <li><a href="#">Ongoing Project</a></li>
             
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Courses & Training</span></a></li>

          
          

          
          
          <li><a href="{{ route('contact.page') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>