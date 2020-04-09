 <style>
   .error{
    color: #cc0000;
    font-size: 14px;
   }
    #loading_image{
      left : 70%;
      top : 55%;
      position : absolute;
      z-index : 101;
      width : 90px;
      height : 70px;
      margin-left : -16px;
      margin-top : -16px;
  }
   #loading_image3{
      left : 41%;
      top : 35%;
      position : absolute;
      z-index : 101;
      width : 50px;
      height : 50px;
     /* margin-left : -16px;
      margin-top : -16px;*/
  }
  #loading_image5{
      left : 41%;
      top : 35%;
      position : absolute;
      z-index : 101;
      width : 50px;
      height : 50px;
     /* margin-left : -16px;
      margin-top : -16px;*/
  }
   #loading_image1{
      left : 41%;
      top : 35%;
      position : absolute;
      z-index : 101;
      width : 90px;
      height : 70px;
     /* margin-left : -16px;
      margin-top : -16px;*/
  }
   #loading_image2{
      left : 41%;
      top : 35%;
      position : absolute;
      z-index : 101;
      width : 50px;
      height : 50px;
     /* margin-left : -16px;
      margin-top : -16px;*/
  }
  
 </style>
   <footer class="footer background--dark pt-0">
    <div class="container">
      <div class="row">
        <div class="footer-content mt-6 mb-5 col-12 ">
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
                                    <a class="nav-link p-0" href="#">Request Demo</a>
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
                          <img width="20px" src="{{asset('public/images/singapore.svg')}}" alt="Singapore Flag" class="flag">
                        </span>
                        <p class="contact-info footer-text"> 519 Balestier Road, #02-03 Le Shantier, Singapore 329852</p>
                    </div>
                    <div class="d-flex">
                        <span class="mr-3">
                          <img width="20px" src="{{asset('public/images/india.svg')}}" alt="India Flag" class="flag">
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
    </div> 
  </div> 

  <div class="dropdown-menu popup-tag shadow" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item py-2" href="#">Copy with Citation</a>
    <a class="dropdown-item py-2" href="#">Copy as Parenthetical Citation</a>
    <a class="dropdown-item py-2" href="#"><span class="dot-separator bg-warning mx-2"></span> Highlight</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item py-2" href="#"><i class="fas fa-cog"></i> Citation Format</a>
  </div>
  <!-- Global Required JS -->
  <script src="{{asset('public/js/vendor/jquery-3.3.1.min.js')}}"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->

  <script src="{{asset('public/js/vendor/popper.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/bootstrap.min.js')}}"></script>

  <!-- Vendor/Plugins JS -->
  <script src="{{asset('public/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery-listslider.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.richtext.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.slimscroll.min.js')}}"></script>
  <!-- Vendor/Plugins JS Init -->
  <script src="{{asset('public/js/init/wb.ajaxchimp-init.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.fancybox.min.js')}}"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>


  <script src="{{asset('public/js/min/main-min.js')}}"></script>
  <!--  <script src="{{asset('public/js/vendor/datatable/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/datatable/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/datatable/dataTables.responsive.min.js')}}"></script> -->

  <script>
    $('.text-slider-list').listslider({
      left_label: '<span class="fas fa-chevron-left"></span>',
      right_label: '<span class="fas fa-chevron-right"></span>'
    });
  </script>

  <script type="text/javascript">
    $(function() {
      $('[data-toggle="tooltip"]').tooltip({
        trigger: "hover"
      })
    })
  </script>

  <script>
    function getSelected() {
      if (window.getSelection) {
        return window.getSelection();
      } else if (document.getSelection) {
        return document.getSelection();
      } else {
        var selection = document.selection && document.selection.createRange();
        if (selection.text) {
          return selection.text;
        }
        return false;
      }
      return false;
    }
    /* create sniffer */
    $(document).ready(function() {
      $('.main-detail-content').mouseup(function(event) {
        var selection = getSelected();
        selection = $.trim(selection);
        if (selection != '') {
          $(".popup-tag").css("display", "block");
          $(".popup-tag").css("top", event.pageY);
          $(".popup-tag").css("left", event.pageX);
        } else {
          $(".popup-tag").css("display", "none");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $('.notes-btn, .close-notes').on('click', function() {
      $('.judgement-section-wrapper').toggleClass('notes-open');
      if (!($('.listslider-arrow').hasClass('active'))) {
        $('.listslider-arrow').toggleClass('active')
      }

    })
  </script>

  <script>
    $('.text-editor').richText({
      imageUpload: false,
      fileUpload: false,
      videoEmbed: false,
      removeStyles: false,
      code: false,
    });
  </script>

  <script>
    $(function() {
      $('.notes-content .tab-content').slimScroll({
        height: '90vh',
      });
    });
  </script>

    <script type="text/javascript">
      jQuery(window).on('load', function(){ var $ = jQuery;
          $('.masonry').masonry();
      });
  </script>

  <script>
      $('[data-fancybox="gallery"]').fancybox({
      // Options will go here
    });
  </script>
   <script type="text/javascript">
    $(document).ready(function() {
      $("#datatable").DataTable()
    });
  </script>