@extends('layouts.layout')

@section('title','LegitQuest | Faq')
@section('content')
 <section class="section about-section section-hero py-0 bg-gray">
      <div class="container">


        <div class="row row-grid justify-content-center">

          <div class="col-md-7 align-self-center text-center mt-9">

            <h1 class="mb-4 font-weight-bold">Frequently Asked Questions</h1>

            <p class="mb-5">We aim high at being focused on building relationships with our clients and community.</p>

          </div>

          <div class="col-12 text-center mt-auto mb-7">
            <a href="#section" class="scroll-to icon icon--small icon--has-shadow d-inline-block rounded-circle background--white">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>

        </div>
      </div>
    </section> <!-- END Section Hero -->

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

            <div class="" id="faq-accordion">
              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0">
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      1.	What is LegitQuest?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>

                <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                  LegitQuest is a leading provider of legal information and technology to litigators. We provide a free, public library of the law, and we empower the litigators with advanced legal research tools like iDRAF which are powered by artificial intelligence.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0">
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                      2.	What is iDRAF?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                  LegitQuest is world’s only legal research product that provide insight and 1-click access to the segregated sections of the judgment. Our 1-click iDRAF enables researcher to see issue, arguments, reasoning, and decision with just one click on mouse.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                      3.	How do I do free text search for a case?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Use the search bar at the middle of the page to find a specific case. First select All from the left side drop down on the search bar. Simply enter the name of a case. For multiple search terms, use ‘+’ sign or for omitting some text, use ‘-‘ sign.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                      4. How do I search for a case by citation?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Select Citation from left side drop down and then enter the citation in the standard format including bracket, spaces, volume and source.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                      5.	How do I search for a case by party Name?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Select Party name from the left side drop down. Enter petitioner or respondent party name in the search bar and press enter. All cases will be shown where the entered name is either petitioner or respondent party.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                      6.	How do I search for a case by Bench or judge name?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Select Bench from left side drop down. Search for a case by entering the name of the judge in the search bar.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                      7.	How can I view the segregated case/ iDRAF feature?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Segregation will be visible when you click on a case to see the detailed judgment. Navigation bar is visible at top of the page, which can be used to access the segregation as defined in the iDRAF feature. This feature could only be accessed after registering yourself with LegitQuest.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                      8.	How can I bookmark a case?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    You can bookmark a case to view later clicking on the “bookmark” icon in the upper right corner of the case you wish to bookmark:<br>

    To view your bookmarks, first, make sure you are logged in to LegitQuest. Then, click on your initials or photo in the upper right corner of your screen, then select Bookmarks from the drop-down menu. You can also see your bookmarks on the right side of the screen on the LegitQuest homepage when you are logged i
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                      9.	Do I need a subscription to use iSearch and read cases?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    You don't need a subscription to read case law on LegitQuest: the ability to read case law on LegitQuest is, and always will be, free.<br>

    You will need a subscription to access iDRAF (our unique segregated quick research feature), as well as the premium research features of the site. Currently this is available free of charge to all users.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                      10.	What content is in your database?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    The LegitQuest database includes primary sources and is procured directly from the source. The data is updated continuously with new courts and judgments getting added every day.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                      11.	How often is content updated?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Case law and analysis on LegitQuest are updated daily. We make all efforts to make all judgments and the segregation for those judgments to be available on same day when the judgment is released.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                      12.	How do I Register?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    At top of the home page, register button is provided. Enter your details in the form. Pl make sure to enter correct email ID and password since these will be used for sending OTP for login.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                      13.	How do I sign in after registering?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Click on login. Enter your mail ID which was used for registering with LegitQuest. An OTP will be sent to your mail ID. Use this OTP to authenticate yourself. No need for remembering or entering any password.
                  </div>
                </div>
              </div>

              <div class="card p-0  border-0 shadow-sm shadow--on-hover mb-3 ">
                <div class="card-header p-0" >
                  <h5 class="mb-0 font-weight-bold">
                    <button class="btn btn-link py-4 text-left  text-dark font-weight-bold d-flex align-items-center  collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                      14.	What are the price of the subscription?
                      <i class="fas fa-chevron-down ml-auto"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#faq-accordion">
                  <hr class="my-0">
                  <div class="card-body">
                    Our current launch is free to all registered users. So go ahead, register yourself and start researching on world’s first 1-click legal research system. For future pricing, contact us from the chat icon at the bottom of screen and we will be glad to share the details.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>




      </div>
    </section> <!-- END SECTION TEAM -->
@endsection