<style>
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
   <footer class="footer background--dark p-0 text-center">
                <div class="container">
                  <div class="row">


                    <div class="col-12">
                      <div class="footer-copyright-column d-md-flex justify-content-center align-items-center py-3">
                        <div class="copyright">
                          <p>©2019 - Legitquest. All rights reserved.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </footer>

<!-- Global Required JS -->
  <!-- <script src="{{asset('public/js/vendor/jquery-3.3.1.min.js')}}"></script> -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="{{asset('public/js/vendor/popper.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/bootstrap.min.js')}}"></script>

  <!-- Vendor/Plugins JS -->
  <script src="{{asset('public/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery-listslider.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.richtext.min.js')}}"></script>
  <script src="{{asset('public/js/vendor/jquery.slimscroll.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
  <!-- Vendor/Plugins JS Init -->
  <script src="{{asset('public/js/init/wb.ajaxchimp-init.js')}}"></script>

  <script src="{{asset('public/js/min/main-min.js')}}"></script>

  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>


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
      $('body').toggleClass('notes-open');
      $('.notes-btn').toggleClass('active');
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
      $('.notes-content .slimScroll').slimScroll({
        height: '',
      });
    });
  </script>

  <script type="text/javascript">
    $('.tab-link').on('click', function() {
      $(this).removeClass('active')
    })
  </script>

  <script type="text/javascript">
  $('.selectpicker').selectpicker('setStyle', 'h4 font-weight-bold mb-0 p-0 border-0 bg-transparent');
    $('.selectpicker-modal').selectpicker('setStyle', 'mb-0 form-control');
  </script>


  <script type="text/javascript">
    $('.judgment-section .sidebar ul li a.idraf-link').on('click', function() {
      $('.judgment-section .sidebar ul li a.idraf-link').removeClass('active');
      $(this).addClass('active');
    })
  </script>

  <script type="text/javascript">
    $('.bookmark-btn').on('click', function() {
      $('#success-notification').addClass('show');
      $('#success-notification span.notification-text').text('Bookmar added successfully! Please check your inbox to opt-in.')
    })
  </script>


  <script type="text/javascript">
    $(".judgment-top-tabs li a").click(function() {
      if($(this).hasClass('judgement-tab')){
          $('body').removeClass('close-idraf');
      }
    else {
      $('body').addClass('close-idraf');
    }
    })
  </script>              