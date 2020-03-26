@extends('layouts.layout')
@section('title','LegitQuest | Gallery')

@section('content')

<!-- {{$data}} -->
  <section class="section about-section section-hero py-0 bg-gray">
      <div class="container">


        <div class="row row-grid justify-content-center">

          <div class="col-md-7 align-self-center text-center mt-9">

            <h1 class="mb-4 font-weight-bold">{{$slugData->heading}}</h1>

            <p class="">It is the authority which makes law, to find it is arduous. A good lawyer is one who knows where to find it.</p>
          </div>
        </div>
      </div>
      <nav class="mt-5">
        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active px-4 py-3"  data-toggle="tab" data-target="#images" href="" role="tab" aria-controls="job-opening" aria-selected="true">Images Gallery</a>
          <a class="nav-item nav-link px-4 py-3"  data-toggle="tab" data-target="#videos" href="" role="tab" aria-controls="cap" aria-selected="false">Videos Gallery</a>
        </div>
      </nav>
    </section> <!-- END Section Hero -->

     <section id="sectionTeam" class="section bg-white pt-6">
      <div class="container">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="images" role="tabpanel">
            <div class="row row-grid justify-content-center">
                <div class="col-md-6 text-center mb-4">
                  <h2 class="section__title mb-2 font-weight-bold">Legit Quest launch event</h2>
                  <p>November, 2017</p>
                </div>
              </div>
            <div class='row'>
              @foreach($data as $value)
              @if($value->gallerytype == "Image") 
              <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail gallery-item shadow-sm bg-white d-block mb-4" data-fancybox="gallery" href="{{asset('public/upload')}}/{{$value->image}}" data-caption="Mr. Kapil Sibal, Senior Advocate Dr. B.S Chauhan, Chairman, Law Commission of India Hon’ble Mr. Justice A.K Sikri, Supreme Court of India Mr. Ram Jethmalani, Senior Advocate Hon’ble Mr. Justice S. Ravindra Bhat, High Court of Delhi (From Left to Right)">
                      <figure class="position-relative mb-0">
                          <img class="img-fluid w-100" alt="" src="{{asset('public/upload')}}/{{$value->image}}">
                          <figcaption class="position-absolute"><i class='lni lni-zoom-in'></i></figcaption>
                      </figure>
                  </a>
              </div> <!-- col-6 / end -->
              @endif
              @endforeach
          </div>
          </div>


          <div class="tab-pane fade" id="videos" role="tabpanel">
            <div class='row'>
              @foreach($data as $value)
              @if($value->gallerytype == "Video")
              <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <a class="thumbnail gallery-item  bg-white d-block mb-4" data-fancybox href="https://www.youtube.com/watch?v=N1RaSIWx__A&t=2s" data-caption="Concluding Remarks by Shri Ram Jethmalani, Patron, Legitquest">
                      <figure class="position-relative mb-0">
                          <img class="img-fluid w-100" alt="" src="{{asset('public/upload')}}/{{$value->image}}"/>
                          <figcaption class="position-absolute"><i class='lni lni-play'></i></figcaption>
                      </figure>
                      <div class="mt-2 p-2">
                        <span class="font-semibold">{!!$value->description!!}</span>
                      </div>
                  </a>
              </div> <!-- col-6 / end -->
              @endif
              @endforeach
          </div>
          </div>
        </div>
      </div>
    </section> <!-- END SECTION TEAM -->


@endsection