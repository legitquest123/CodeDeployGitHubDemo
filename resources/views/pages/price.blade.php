@extends('layouts.layout')
@section('title','LegitQuest | Price')
@section('content')

    <section class="section section-hero bg-gray">
      <div class="container">
        <div class="row">

          <div class="col-md-6 offset-md-3 text-center">
            <h1 class="my-3 font-weight-bold">Choose the right plan. no setup and hidden fees</h1>
            <div class="mb-5">
              <p class="text-success">Free - full license for paralegals and support staff</p>
            </div>
          </div>
        </div>

        <div class="row row-grid justify-content-center">
          <div class="col text-center">
            <div class="btn-group btn-group-toggle annual-month-toggle" data-toggle="buttons">
              <label class="btn btn-outline-primary active w-50">
                <input type="radio" name="options" id="option1" checked=""> Pay annually
(save 25%)
              </label>
              <label class="btn btn-outline-primary w-50">
                <input type="radio" name="options" id="option2">Pay monthly
              </label>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- END Section Hero -->

    <section class="section section-pricing bg-gray">
      <div class="container">
        <div class="pricing__wrapper mt-n9">

          <div class="pricing card-group flex-column flex-md-row">
            <div class="card pricing__card">
              <div class="card-header pt-4 pb-3 text-center">
                <span class="d-block h3 font-weight-bold">Individual</span>
                <span class="text-muted d-block">For 1 attorney</span>
                <div class="pricing__tag">
                  <div class="">
                    $ <span class="price">9000</span>
                  </div>
                  <span class="text-muted d-block">Per month billed annually</span>
                </div>

                <a href="#0" class="btn btn-primary btn--has-shadow mt-4">Subscribe Now</a>
              </div> <!-- Pricing Card Header -->

              <hr>

              <div class="card-body pt-0">
                <ul class="pricing__feature-list  list-unstyled">
                  <li><strong class="color--heading">Unlimited</strong> Unlimited access</li>
                  <li><strong class="color--heading">50</strong> -state and federal cases, statutes, regulations, and rules</li>
                  <li><strong class="color--heading">A.I.</strong> search</li>
                  <li><strong class="color--heading">Annotated</strong> codified law</li>
                  <li>Check for bad law with <strong class="color--heading">advanced citator</strong></li>
                  <li><strong class="color--heading">Free customer support</strong> Personalized training</li>
                </ul>
              </div> <!-- Pricing Card Body -->

              <div class="card-footer text-center">

              </div> <!-- Pricing Card Footer -->
            </div> <!-- Pricing Card -->

            <div class="card pricing__card background--brand transform-xs-none">

              <div class="card-header pt-4 pb-3 text-center">
                <span class="d-block h3 color--white font-weight-bold">Business</span>
                <span class="text-white d-block">For 2 - 11 attorneys</span>
                <div class="pricing__tag  ">
                  <div class="">
                    $ <span class="price text-white">25000</span>
                  </div>

                  <span class="text-white d-block">Per month billed annually</span>

                </div>
                  <a href="#0" class="btn btn-secondary btn--has-shadow mt-4">Subscribe Now</a>
              </div> <!-- Pricing Card Header -->

              <hr>

              <div class="card-body pt-1">
                <ul class="pricing__feature-list list-unstyled">
                  <li><strong class="">Unlimited</strong> Unlimited access</li>
                  <li><strong class="">50</strong> -state and federal cases, statutes, regulations, and rules</li>
                  <li><strong class="">A.I.</strong> search</li>
                  <li><strong class="">Annotated</strong> codified law</li>
                  <li>Check for bad law with <strong class="">advanced citator</strong></li>
                  <li><strong class="">Free customer support</strong> Personalized training</li>
                </ul>
              </div> <!-- Pricing Card Body -->

              <div class="card-footer text-center">

              </div> <!-- Pricing Card Footer -->
            </div> <!-- Pricing Card -->

            <div class="card pricing__card">
              <div class="card-header pt-4 pb-3 text-center">
                <span class="d-block h3 font-weight-bold">Enterprise</span>
                <span class="text-muted d-block">For 11+ attorneys</span>
                <div class="pricing__tag">
                  <span class="price">&nbsp;</span>
                  <span class="text-muted d-block">&nbsp;</span>
                </div>

                <a href="#0" class="btn btn-primary btn--has-shadow mt-4">contact sales</a>
              </div> <!-- Pricing Card Header -->

              <hr>

              <div class="card-body pt-0">
                <ul class="pricing__feature-list list-unstyled">
                  <li><strong class="color--heading">Personalized onboarding</strong> and <strong class="color--heading">team management</strong></li>
                  <li><strong class="color--heading">Partnership</strong>  and <strong class="color--heading">co-marketing</strong> </li>

                </ul>
              </div> <!-- Pricing Card Body -->

              <div class="card-footer text-center">

              </div> <!-- Pricing Card Footer -->
            </div> <!-- Pricing Card -->
          </div>

        </div> <!-- END Pricing Content Wrapper -->

        <div class="faq__wrapper">

          <div class="row justify-content-between">

            <div class="col-12 text-center">
              <h2 class="section__title mb-6">Frequently asked questions</h2>
            </div>

            <div class="col-md-6 mb-5 mb-md-0">
              <div class="mb-5">
                <h4>What if I decide I want a different plan?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
              </div>

              <div>
                <h4>What are my payment options?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
              </div>

            </div>

            <div class="col-md-6">
              <div class="mb-5">
                <h4>Are there contracts or commitments?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
              </div>

              <div>
                <h4>Do I need to enter my credit card to get a free trial?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
              </div>

            </div>

          </div>
        </div> <!-- END FAQ Content -->

      </div>
    </section> <!-- END Section Pricing -->




@endsection