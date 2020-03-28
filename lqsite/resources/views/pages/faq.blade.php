@extends('layouts.layout')

@section('content')
 <section class="section about-section section-hero py-0 bg-gray">
      <div class="container">
   
        <div class="row row-grid justify-content-center">

          <div class="col-md-7 align-self-center text-center mt-9">

            <h1 class="mb-4 font-weight-bold">{{$slugData->heading}}</h1>

            <p class="mb-5">We aim high at being focused on building relationships with our clients and community.</p>

          </div>

          <div class="col-12 text-center mt-auto mb-7">
            <a href="#section" class="scroll-to icon icon--small icon--has-shadow d-inline-block rounded-circle background--white">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>

        </div>
      </div>
    </section> 


    <section id="section" class="section section-faq bg-gray pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="search-box">
              <div class="form-control mb-4 p-0 shadow-sm border-0 d-flex align-items-center">
                <input type="text" class="h-auto  border-0 flex-fill" placeholder="search Keyword here...">
                <a href="#" class="pr-3 mt-1 search-icon">
                  <i class='lni lni-search'></i>
                </a>
              </div>
            </div>
    @foreach($data as $key=> $value)
            <div class="" id="faq-accordion">
              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
             
                <div class="card-header p-0">
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center " type="button" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse">
                       {!!$value->question!!}
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>

                <div id="collapse{{$key}}" class="collapse" aria-labelledby="headingOne" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                 {!!$value->answer!!}
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
      </div>
  </div>
</section>
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