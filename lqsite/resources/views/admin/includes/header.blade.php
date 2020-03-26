               @if(session()->has('key'))
                   <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">


              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="Search here ..."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('public/upload')}}/{{session()->get('pimage')}}
                      " class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"> {{session()->get('key')}}</span>
                    
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <!-- <img src="{{asset('public/images/users/user-6.jpg')}}" class="img-circle" alt="User Image" /> -->
                        <div class="d-inline-block">
                          <!-- <small class="pt-1">{{session()->get('key')}}</small> -->
                        </div>
                      </li>

                      <li>
                        <a href="{{URL('admin/profile')}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="{{URL('admin/change-password')}}">
                          <i class="mdi mdi-lock"></i>Change Password
                        </a>
                      </li>
                      <li>
                        <a href="{{URL('admin/sitesetting')}}"> <i class="mdi mdi-diamond-stone"></i>Site Settings</a>
                      </li>
                      <!-- <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li> -->

                      <li class="dropdown-footer">
                        <a href="{{URL('admin/logout')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>

          </header>
          @endif
<style>
element.style {
}
.navbar .dropdown-menu li.dropdown-header {
    border-top-left-radius: .25rem; 
    border-top-right-radius: .25rem; 
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; 
    background-color: #ffffff;
    padding: 1.25rem 1.25rem 0.63rem;
    border-bottom: 1px #e5e9f2 !important;
    color: #1b223c;
    font-size: 1rem;
    margin-bottom: 0.63rem;
}
.navbar .navbar-right .navbar-nav li > .dropdown-menu {
    /* position: absolute; */
    right: -4px !important;
    border-color: #e5e9f2;
}
</style>         
