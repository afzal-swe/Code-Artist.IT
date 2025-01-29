

@php
    
    $settings = DB::table('website_settings')->first();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin_home') }}" class="brand-link">
      <img src="{{ asset($settings->favicon) }}" alt="{{ $settings->website_name }}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RSB Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin_home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Role System
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">0</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Role</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                User System
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">0</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>
            </ul>
          </li>

          @php
            $people = DB::table('people__panels')->get();
          @endphp
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                People Panel
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{ count($people) }}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('people_panel.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Panel</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Banner
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('banner.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Banner</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Client Feedback
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('feedback.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Feedback</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Innovative Products
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('innovative_product.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Products</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Sister Concern
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sister_concern.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sister Concern</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Our Timelines
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('our_timeline.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Timeline</p>
                </a>
              </li>
            </ul>
           
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Developed Software
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('development_software.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Development</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Blogs
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('blogs.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Blogs</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Our Expartics
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('our_expartics.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Expartics</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               We Have
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('we_have.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage We Have</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Honorable Clients
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('clients.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Clients</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Service Areas
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('service_areas.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Service</p>
                </a>
              </li>
            </ul>
          </li>



          @php
            $contact = DB::table('contacts')->get();
          @endphp
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{ count($contact) }}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contact.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Contact</p>
                </a>
              </li>
            </ul>
          </li>
          
         
         
         
          <li class="nav-header">ADVANCE SETTINGS</li>
        
        
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('faq.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('notice.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('seo.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seo Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('social.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('website_settings.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Website Setting</p>
                </a>
              </li>
            </ul>
          </li>

    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout & Password
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.password_change') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="logout" href="{{ route('admin.logout') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          
        
        
       
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>