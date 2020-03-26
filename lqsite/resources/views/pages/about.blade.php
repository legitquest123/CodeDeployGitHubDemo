@extends('layouts.layout')
@section('title','LegitQuest | About Us')
@section('content')
  
    <section class="section about-section section-hero py-0 bg-gray">
      <div class="container">


        <div class="row row-grid justify-content-center">

          <div class="col-md-7 align-self-center text-center mt-9">

            <h1 class="mb-4 font-weight-bold">About Legitquest</h1>

            <p class="mb-5">It is the authority which makes law, to find it is arduous. A good lawyer is one who knows where to find it.</p>

          </div>

          <div class="col-12 text-center mt-auto mb-7">
            <a href="#sectionTeam" class="scroll-to icon icon--small icon--has-shadow d-inline-block rounded-circle background--white">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>

        </div>
      </div>
    </section> <!-- END Section Hero -->

    <section id="sectionTeam" class="section section-team gradient-light--upright">
      <div class="container">

        <div class="row row-grid justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="section__title mb-6 font-weight-bold">Search Smarter, Wide Coverage</h2>
          </div>
        </div>

        <div class="card card-side-to-side  p-0 border-0 shadow">
          <div class="row no-gutters align-items-md-center">
            <div class="col-md-6 position-relative align-self-stretch">
              <img class="card-side-to-side__image img-fluid h-100" src="{{asset('public/images/about1.png')}}" alt="Card Image">

              <a  href="https://www.youtube.com/watch?v=74m3LK5ol70" class="popup-iframe icon icon--large d-inline-block rounded-circle background--white position-center scale-110--on-hover">
                <i class="fa fa-play pl-1 color--brand"></i>
              </a>
            </div> <!-- Left Side Card -->
            <div class="col-md-6">
              <div class="card-body p-5 p-md-4 p-lg-5">
                <p>This secure platform helps the stakeholders to research efficiently with the most advanced search engine developed through cutting edge technology as we have transformed complex data into a user-friendly form to make legal research faster.</p>
                <p>We will be providing access to the vast and comprehensive legal database to our users in the most reliable, accurate, valuable and speedy manner. LegitQuest strives to become a one-stop solution for the legal fraternity.</p>
              </div>
            </div>
          </div> <!-- Right Side Card -->
        </div> <!-- Side to Side Content/Card -->
      </div>
    </section> <!-- END SECTION TEAM -->


    <section class="section section-testimonials gradient-light--lean-left pb-0">
      <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-5 offset-lg-0 align-self-center text-center text-lg-left">
                <div class="div-info">
                    <h2 class="section__title mb-4 font-weight-bold">Analytics Workbench</h2>

                    <p style="text-align: justify;">
                            LegitQuest is a Legal-Tech venture run by a versatile team of tech-savvy attorneys, engineers and designers who aim to make the practice of law simpler for its end users. Eminent jurist Mr. Ram Jethmalani is our patron, advisor and investor. Seeking to transform centuries-old unorganised and unstructured legal data for the benefit of the legal fraternity, we have built a one of its kind go-to platform with the most updated technologies for the communities of attorneys, law firms, state judicial officers, law students, corporates, the government, consulting companies, litigants, and many other stakeholders in the legal system.
                        </p>

                </div>
            </div>
            <div class="col-lg-7 align-self-end text-right">
                <div class="igraphic-img">
                    <img src="./images/about1.png" class="img-fluid">
                </div>
            </div>
        </div>

      </div>
    </section> <!-- END Section Testimonials -->




    <section class="section section-subscribe gradient-light--upright">
      <figure class="figure pattern-svg">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1306px" height="225px">
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M-0.011,9.318 L8.682,6.988 L11.011,15.682 L2.318,18.011 L-0.011,9.318 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M607.694,164.319 L612.680,161.693 L615.306,166.680 L610.320,169.305 L607.694,164.319 Z"></path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M667.343,205.646 L679.152,213.179 L671.620,224.988 L659.810,217.456 L667.343,205.646 Z"></path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M915.839,-0.008 L924.997,5.833 L919.156,14.991 L909.998,9.150 L915.839,-0.008 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M989.000,93.000 C993.418,93.000 997.000,96.582 997.000,101.000 C997.000,105.418 993.418,109.000 989.000,109.000 C984.582,109.000 981.000,105.418 981.000,101.000 C981.000,96.582 984.582,93.000 989.000,93.000 Z"></path>
          <path fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M1165.000,8.000 C1167.761,8.000 1170.000,10.238 1170.000,13.000 C1170.000,15.761 1167.761,18.000 1165.000,18.000 C1162.239,18.000 1160.000,15.761 1160.000,13.000 C1160.000,10.238 1162.239,8.000 1165.000,8.000 Z"></path>
          <path fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M1303.500,118.000 C1304.881,118.000 1306.000,119.119 1306.000,120.500 C1306.000,121.880 1304.881,123.000 1303.500,123.000 C1302.119,123.000 1301.000,121.880 1301.000,120.500 C1301.000,119.119 1302.119,118.000 1303.500,118.000 Z"></path>
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

            <form class="subscribe-form form-inline mt-5">
              <div class="input-group mr-sm-3 mb-2">
                <input type="email" class="form-control" id="email" placeholder="Email address">
              </div>
              <button type="submit" class="btn btn-primary btn--has-shadow mb-2">Get Started Now</button>
            </form>
          </div>

        </div>
      </div>
    </section> <!-- END Section Subscribe -->



@endsection