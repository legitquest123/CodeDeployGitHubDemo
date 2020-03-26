  <header class="header">

    <nav class="navbar navbar-expand-lg navbar-sm position-static">
      <div class="container-fluid position-relative">

        <a class="navbar-brand" href="http://localhost:8080/lqsite/">
            <img src="{{asset('public/upload')}}/{{Helpers::getFrontEndLogo()}}" alt="legitquest"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="offcanvas">
          <i class="navbar-toggler__bar navbar-toggler__bar--top"></i>
          <i class="navbar-toggler__bar navbar-toggler__bar--middle"></i>
          <i class="navbar-toggler__bar navbar-toggler__bar--bottom"></i>
        </button> <!-- Navbar Toggle Button -->

        <div class="offcanvas-collapse d-lg-flex flex-fill align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/lqsite/">Home</a>
            </li>

            <li class="nav-item nav--has-sub-menu" data-toggle="hover">
              <a class="nav-link" href="#" data-toggle="dropdown">Company</a>
              <ul class="nav-sub-menu dropdown-menu rounded-lg shadow">
                <li class="nav-item">
                  <a href="{{URL('about')}}" class="nav-link">About Legitquest</a>
                </li>
                <li class="nav-item">
                  <a href="{{URL('team')}}" class="nav-link">Our Team</a>
                </li>
                <li class="nav-item">
                  <a href="{{URL('career')}}" class="nav-link">Career</a>
                </li>
                <li class="nav-item">
                  <a href="{{URL('contact')}}" class="nav-link">Contact US</a>
                </li>
              </ul>
            </li>

            <li class="nav-item nav--has-sub-menu" data-toggle="hover">
              <a class="nav-link" href="#" data-toggle="dropdown">Products</a>

              <ul class="nav-sub-menu dropdown-menu rounded-lg shadow">
                <li class="nav-item">
                  <a href="{{URL('researchrequest')}}" class="nav-link">Research</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Publish</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Top Judgement</a>
                </li>
              </ul>
            </li>

            <li class="nav-item nav--has-sub-menu" data-toggle="hover">
              <a class="nav-link" href="{{URL('service')}}" data-toggle="dropdown">Services</a>

              <ul class="nav-sub-menu dropdown-menu rounded-lg shadow">
                <li class="nav-item">
                  <a href="{{URL('service')}}" class="nav-link">Typing</a>
                </li>
                <li class="nav-item">
                  <a href="{{URL('service')}}" class="nav-link">Translation</a>
                </li>
                <li class="nav-item">
                  <a href="{{URL('service')}}" class="nav-link">Filling</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{URL('price')}}">Pricing </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto align-items-lg-center">

            <li class="nav-item nav-item--btn">
              <a href="#" class="btn btn-outline-primary btn-sm btn--has-shadow mt-3 mt-lg-0">LQ Publish</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="./login.html">Sign In</a>
            </li>
            <li class="nav-item nav-item--btn">
              <a href="./pricing.html" class="btn btn-primary btn-sm btn--has-shadow mt-3 mt-lg-0">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> <!-- END Navbar -->

  </header>