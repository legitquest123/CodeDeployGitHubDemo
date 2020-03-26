
  <footer class="footer background--dark">
    <div class="container">
      <div class="row">

        <div class="cta-block__wrapper col">
          <div class="cta-block gradient-brand-color py-5">
            <div class="row">
              <div class="col-10 offset-1 d-md-flex justify-content-between align-items-center">
                <div class="cta__contet color--white">
                  <h2 class="color--white">Priced to suit your business</h2>
                  <p>Simple plans, no contract, no setup and hidden fees</p>
                </div>

                <div class="cta__button">
                  <a href="{{URL('price')}}" class="btn btn-secondary">View Pricing Plans</a>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- CTA Block Wrapper -->

        <div class="footer-content mb-5 col-12 ">
          <div class="footer-row row ">
            <div class="col-md-7">
                <div class="row px-md-4">
                  <div class="col-md-4 features-column ">
                    <h4 class="footer-tittle text-white mb-4">Company</h4>
                    <ul class="footer-nav nav flex-column align-items-start list-unstyled">
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="{{URL('team')}}">Our Team</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="{{URL('gallery')}}">Gallery</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="{{URL('contact')}}">Contact Us</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="{{URL('career')}}">Careers</a>
                        </li>
                    </ul>
                  </div>
                  <div class="col-md-8 features-column ">
                      <h4 class="footer-tittle text-white mb-4">Information</h4>
                      <div class="row">
                          <div class="col-md-6 ">
                            <ul class="footer-nav nav flex-column align-items-start list-unstyled">
                            <li class="nav-item mb-2">
                                <a class="nav-link p-0" href="{{URL('terms-condition')}}">Terms &amp; Conditions</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link p-0" href="{{URL('policy')}}">We value your Privacy</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link p-0" href="{{URL('service')}}">Legal Services</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link p-0" href="/newsletter">Newsletter</a>
                            </li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                              <ul class="footer-nav nav flex-column align-items-start list-unstyled">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="./contact.html">Request Demo</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#" data-toggle="modal" data-target="#judgmentModal">Request a Judgment</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="./law-commission-report.html">Law Commission Report</a>
                                </li>
                                  <li class="nav-item mb-2">
                                      <a class="nav-link p-0" href="{{URL('faq')}}">FAQ</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="features-column col-md-4 ml-auto">
                <h4 class="footer-tittle text-white mb-4">Contact</h4>
                <div class="address_box">
                    <div class="d-flex">
                        <span class="mr-3">
                          <img width="20px" src="./images/singapore.svg" alt="Singapore Flag" class="flag">
                        </span>
                        <p class="contact-info footer-text"> 519 Balestier Road, #02-03 Le Shantier, Singapore 329852</p>
                    </div>
                    <div class="d-flex">
                        <span class="mr-3">
                          <img width="20px" src="./images/india.svg" alt="India Flag" class="flag">
                        </span>
                        <p class="contact-info footer-text">   A-149,Block A, LGF, Defence Colony, New Delhi, India - 110024.</p>
                    </div>
                </div>
            </div>
        </div>
        </div> <!-- Footer Content -->

        <div class="col-12">
          <div class="footer-copyright-column d-md-flex justify-content-between align-items-center">
            <div class="copyright">
              <p>©2019 - legitquest. All rights reserved.</p>
            </div>

            <ul class="social-icons ml-auto mb-0">
              <li><a href="https://www.facebook.com/legitquestlegal/"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/LegitQuestLegal"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/legit-quest/"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="https://plus.google.com/116187677143139740338"><i class="fab fa-google"></i></a></li>
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
  <!-- <script src="{{asset('public/js/vendor/jquery-3.3.1.min.js')}}"></script> -->
   <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="{{asset('public/js/vendor/popper.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/bootstrap.min.js')}}"></script>

  <!-- Vendor/Plugins JS -->
  <script src="{{asset('public/js/vendor/swiper.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.ajaxchimp.min.js')}}"></script>

  <!-- Vendor/Plugins JS Init -->
  <script src="{{asset('public/js/init/wb.swiper-init.js')}}"></script>
  <script src="{{asset('public/js/init/wb.ajaxchimp-init.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.tree-multiselect.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.slimscroll.min.js')}}"></script>


  <!-- Template JS -->
  <script src="{{asset('public/js/min/main-min.js')}}"></script>
  <script src="{{asset('public/js/searchbar.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.waypoints.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


  <script>
    AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 300, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-center', // defines which position of the element regarding to window should trigger the animation

});
  </script>

  <script type="text/javascript">
    $('.menu-icon, .sidebar-menu-header .close').on('click',function() {

      $('body').toggleClass('menu-open');
      $('.hamburger').toggleClass('is-active');
      $('.menu-overlay').fadeToggle();
    })
  </script>

  <script type="text/javascript">
    $('.sidebar-nav .nav-link').on('click', function() {
      $(this).parent('.nav-item.nav--has-sub-menu').siblings().removeClass('show');
      $(this).parent('.nav-item.nav--has-sub-menu').toggleClass('show')
    })
  </script>

  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 4000
    })
  </script>

  <script>
    $(function() {
      $('.slimScroll').slimScroll({
        height: '',
      });
    });
  </script>
