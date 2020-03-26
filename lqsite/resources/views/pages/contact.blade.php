@extends('layouts.layout')
@section('title','LegitQuest | Contact')
@section('content')

    <section class="section section-hero bg-gray pb-9">
      <div class="container">


        <div class="row row-grid justify-content-center">

          <div class="col-md-8 align-self-center text-center mt-6 mb-5">

            <h1 class="mb-3 font-weight-bold">Have a question?</h1>

            <p class="lead mb-3">Drop us a message and we’ll get back to you.</p>

          </div>

        </div>
      </div>
    </section> <!-- END Section Hero -->


    <section class="section section-contact gradient-light--lean-left pt-1">
      <div class="container">
        <div class="contact__wrapper shadow-lg mt-n9">

          <div class="row no-gutters">
            <div class="col-lg-4 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
              <h3 class="color--white mb-5">Get in Touch</h3>

              <ul class="contact-info__list list-style--none position-relative z-index-101">
                <li class="mb-4 pl-4">
                  <span class="position-absolute"><i class="fas fa-envelope"></i></span>
                  info@legitquest.com
                </li>
                <li class="mb-4 pl-4">
                  <span class="position-absolute"><i class="fas fa-phone"></i></span>
                  (021)-241454-545
                </li>
                <li class="mb-4 pl-4">
                  <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span>
                  FA-149,Block A, LGF,<br> Defence Colony, New Delhi,<br>  India - 110024.

                  <div class="mt-3">
                    <a href="https://www.google.com/maps" target="_blank" class="text-link link--right-icon text-white">Get directions <i class="link__icon fa fa-directions"></i></a>
                  </div>
                </li>
              </ul>

              <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                  <defs>
                    <lineargradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                      <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                      <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                    </lineargradient>

                  </defs>
                  <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                  <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                </svg>
              </figure>
            </div>

            <div class="col-lg-8 contact-form__wrapper p-4 order-lg-1">
              <form class="contact-form form-validate" id="WebToLeadForm" action="http://3.12.2.118//suitecrm/index.php?entryPoint=WebToPersonCapture" method="POST" name="WebToLeadForm">


        <div class="row">
            <div class="col-sm-6 mb-3">
                <label>First Name: <span class="required">*</span></label>
                <input class="form-control" name="first_name" id="first_name" type="text" required="" placeholder="First name">
            </div>
            <div class="col-sm-6 mb-3">
                <label>Last Name:</label>
                <input class="form-control" name="last_name" id="last_name" type="text" placeholder="Last name">
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label>Mobile Number:<span class="required">*</span> </label>
                <input class="form-control" name="phone_work" id="phone_work" type="text" required="" placeholder="Phone number">
            </div>
            <div class="col-sm-6 mb-3">
                <label>Email Address: <span class="required">*</span></label>
                <input class="form-control" name="email1" id="email1" type="email" required="" placeholder="Email id">
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label>&nbsp;City: </label>
                <input class="form-control" name="primary_address_city" id="primary_address_city" type="text" placeholder="City">
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label>Query For: </label>
                <select class="form-control custom-select"  name="query_for_c" id="query_for_c" tabindex="1">
                    <option value="LegalResearch" selected="selected">Legal Research</option>
                    <option value="LegalServices">Legal Services</option>
                </select>
            </div>
            <div class="col-sm-6 mb-3">
                <label>Query: </label>
                <select class="form-control custom-select" name="query_c" id="query_c" tabindex="1">
                    <option value="Filing" selected="selected">Filing</option>
                    <option value="Typing">Typing</option>
                    <option value="Corporate">Corporate</option>
                    <option value="Individual">Individual</option>
                    <option value="Law Firm">Law Firm</option>
                    <option value="Universities">Universities</option>
                    <option value="Translation">Translation</option>
                    <option value="Research Request">Research Request</option>
                </select>
            </div>
        </div>
        <div class="row">
             <div class="col-sm-12 mb-3">
                <label>Remark: </label>
                <textarea class="form-control" rol="5" cols="30" name="remark_c" id="remark_c" placeholder="Please fill your query in detail.."></textarea>
            </div>

        </div>
        <div class="row">
          <div class="col-sm-12 mb-3">
            <input class="btn btn-primary" class="button" name="Submit" type="submit" value="Submit" onclick="submit_form();">
          </div>
        </div>

        <input name="campaign_id" id="campaign_id" type="hidden" value="33d4bb21-4012-5c37-4189-5e14386a940b">
        <input name="assigned_user_id" id="assigned_user_id" type="hidden" value="1">
        <input name="moduleDir" id="moduleDir" type="hidden" value="Leads">
    </form>

            </div> <!-- End Contact Form Wrapper -->

          </div>

        </div> <!-- End Contact Wrapper -->
      </div>
    </section> <!-- END Section Contact -->

    <section class="section section-subscribe gradient-light--upright">
      <figure class="figure pattern-svg">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1306px" height="225px">
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M-0.011,9.318 L8.682,6.988 L11.011,15.682 L2.318,18.011 L-0.011,9.318 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M607.694,164.319 L612.680,161.693 L615.306,166.680 L610.320,169.305 L607.694,164.319 Z"></path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M667.343,205.646 L679.152,213.179 L671.620,224.988 L659.810,217.456 L667.343,205.646 Z"></path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M915.839,-0.008 L924.997,5.833 L919.156,14.991 L909.998,9.150 L915.839,-0.008 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M989.000,93.000 C993.418,93.000 997.000,96.582 997.000,101.000 C997.000,105.418 993.418,109.000 989.000,109.000 C984.582,109.000 981.000,105.418 981.000,101.000 C981.000,96.582 984.582,93.000 989.000,93.000 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M1165.000,8.000 C1167.761,8.000 1170.000,10.238 1170.000,13.000 C1170.000,15.761 1167.761,18.000 1165.000,18.000 C1162.239,18.000 1160.000,15.761 1160.000,13.000 C1160.000,10.238 1162.239,8.000 1165.000,8.000 Z"></path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M1303.500,118.000 C1304.881,118.000 1306.000,119.119 1306.000,120.500 C1306.000,121.880 1304.881,123.000 1303.500,123.000 C1302.119,123.000 1301.000,121.880 1301.000,120.500 C1301.000,119.119 1302.119,118.000 1303.500,118.000 Z">
          </path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M61.000,112.000 C62.657,112.000 64.000,113.343 64.000,115.000 C64.000,116.657 62.657,118.000 61.000,118.000 C59.343,118.000 58.000,116.657 58.000,115.000 C58.000,113.343 59.343,112.000 61.000,112.000 Z"></path>
          <path fill-rule="evenodd" fill="rgb(74, 92, 246)" d="M265.500,-0.000 C271.299,-0.000 276.000,4.701 276.000,10.500 C276.000,16.299 271.299,21.000 265.500,21.000 C259.701,21.000 255.000,16.299 255.000,10.500 C255.000,4.701 259.701,-0.000 265.500,-0.000 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M185.500,131.000 C187.985,131.000 190.000,133.015 190.000,135.500 C190.000,137.985 187.985,140.000 185.500,140.000 C183.015,140.000 181.000,137.985 181.000,135.500 C181.000,133.015 183.015,131.000 185.500,131.000 Z"></path>
        </svg>
      </figure> <!-- Pattern SVG Background -->

      <div class="container">
        <div class="row row-grid justify-content-center">

          <div class="col-md-8 col-lg-7 col-xl-6 text-center">
            <h2 class="section__title mb-4">Start Using Legitquest Now</h2>

            <p>Try Legitquest and see the difference</p>

            <form class="subscribe-form form-inline mt-5" novalidate="true">
              <div class="input-group mr-sm-3 mb-2">
                <input type="email" class="form-control" id="email" placeholder="Email address" name="EMAIL">
              </div>
              <button type="submit" class="btn btn-primary btn--has-shadow mb-2">Get Started Now</button>
            </form>
          </div>

        </div>
      </div>
    </section> <!-- END Section Subscribe -->

@endsection