@extends('layouts.layout')
@section('content')

 <section class="section about-section section-hero py-0 bg-gray">
      <div class="container">

        <div class="row row-grid justify-content-center">

          <div class="col-md-7 align-self-center text-center mt-9">

            <h1 class="mb-4 font-weight-bold">{{$slugData->heading}}</h1>

            <p class="mb-5"></p>

          </div>

          <div class="col-12 text-center mt-auto mb-7">
            <a href="#sectionTeam" class="scroll-to icon icon--small icon--has-shadow d-inline-block rounded-circle background--white">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </div>
      </div>
    </section> <!-- END Section Hero -->
{!! $slugData->description !!}

@endsection