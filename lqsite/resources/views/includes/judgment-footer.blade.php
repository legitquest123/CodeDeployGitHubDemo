
  <footer class="footer background--dark pt-0">
    <div class="container">
      <div class="row">

        <div class="footer-content col-12 d-md-flex justify-content-between align-items-center my-5">
          <div class="footer__brand">
            <a class="footer-logo mb-0" href="index.html">
              <img src="{{asset('public/images/lq-logo-dark.png')}}" alt="legitquest" >
            </a>
          </div>

          <div class="footer__menu">
            <ul class="footer-nav nav">
              <li class="nav-item">
                <a class="nav-link" href="pricing.html">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog-full-width.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item nav-item--btn">
                <a href="signup.html" class="btn btn-primary btn-sm btn--has-shadow mt-3 mt-md-0">Sign up</a>
              </li>
            </ul>
          </div>
        </div> <!-- Footer Content -->

        <div class="col-12">
          <div class="footer-copyright-column d-md-flex justify-content-between align-items-center">
            <div class="copyright">
              <p>©2019 - Legitquest. All rights reserved.</p>
            </div>

            <ul class="social-icons ml-auto mb-0">
              <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
              <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </footer> <!-- END Footer -->

  <div class="alert-notifications-wrapper">

    <div id="subscribe-success-notification" class="alert alert-validation alert-success alert-dismissible fade" role="alert">
      Thank you for subscribing! Please check your inbox to opt-in.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> <!-- Subscribe Success -->

    <div id="subscribe-error-notification" class="alert alert-validation alert-danger alert-dismissible fade" role="alert">
      Oh no, error happened! Please check the email address and/or try again.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> <!-- Subscribe Error -->

  </div> <!-- END Alert Notifications Wrapper -->

   <!-- Global Required JS -->

  <!-- <script src="{{asset('public/js/vendor/query-3.3.1.min.js')}}"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="{{asset('public/js/vendor/popper.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/moment.min.js')}}"></script>
  <!-- Vendor/Plugins JS -->
  <script src="{{asset('public/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.tree-multiselect.js')}}"></script>
  <script src="{{asset('public/js/vendor/daterangepicker.js')}}"></script>

  <!-- Vendor/Plugins JS Init -->
  <script src="{{asset('public/js/init/wb.ajaxchimp-init.js')}}"></script>


  <script src="{{asset('public/js/min/main-min.js')}}"></script>
  <script src="{{asset('public/js/searchbar.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.slimscroll.min.js')}}"></script>

  <script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'right',
    showDropdowns: true,
    minYear: 1901,
    "linkedCalendars": false,
    "maxYear": 2019,
    //"parentEl": "aside",
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>


<script>
  $(function() {
    $('.filter-sidebar .slimScroll').slimScroll({
      height: '',
    });
  });
</script>
<script type="text/javascript">
  $('.filter-togle a').on('click',function() {
    $('.filter-sidebar').toggleClass('show')
  })
</script>