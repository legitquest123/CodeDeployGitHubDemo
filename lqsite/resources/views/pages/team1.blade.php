@extends('layouts.layout')
@section('title','LegitQuest Team')

@section('content')
 <section class="section about-section section-hero py-0 bg-gray">
      <div class="container">


        <div class="row row-grid justify-content-center">

          <div class="col-md-7 align-self-center text-center mt-9 mb-4">

            <h1 class="mb-4 font-weight-bold">Legitquest Team</h1>

            <p class="mb-5">It is the authority which makes law, to find it is arduous. A good lawyer is one who knows where to find it.</p>

          </div>



        </div>
      </div>
    </section> <!-- END Section Hero -->
    <div class="tab-topnav bg-dark position-sticky">
      <div class="container">
        <ul class="nav justify-content-center" id="myTab" role="tablist">
          <li class="tab-item">
            <button type="button" class="btn btn-link text-white active" data-toggle="tab" data-target="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
              Team
            </button>
          </li>
          <li class="tab-item">
            <button type="button" class="btn text-white btn-link" data-toggle="tab" data-target="#tab2" role="tab" aria-controls="tab2" aria-selected="true">
              National Advisory
            </button>
          </li>
          <li class="tab-item">
            <button type="button" class="btn text-white btn-link" data-toggle="tab" data-target="#tab3" role="tab" aria-controls="tab3" aria-selected="true">
              International Advisory
            </button>
          </li>
          <li class="tab-item">
            <button type="button" class="btn text-white btn-link" data-toggle="tab" data-target="#tab4" role="tab" aria-controls="tab4" aria-selected="true">
              Consultant
            </button>
          </li>
          <li class="tab-item">
            <button type="button" class="btn text-white btn-link " data-toggle="tab" data-target="#tab5" role="tab" aria-controls="tab5" aria-selected="true">
              Campus
            </button>
          </li>
        </ul>
      </div>

    </div>

    <section id="sectionTeam" class="section section-team bg-white py-6">
      <div class="container">

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane team-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
            <div class="team-block">
              <div class="element-wrapper center">
                <h3 class="element-header mb-5 font-weight-bold">
                  Management team
                </h3>
              </div>

              <div class="d-flex flex-wrap ">

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/karankalia.jpg')}}" alt="Karan Kalia" class="img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Karan Kalia</strong>
                      <p class="mb-2">Founder & CEO</p>
                      <a href="https://www.linkedin.com/in/karan-kalia-0476202b/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/himanshupuri.jpg')}}" alt="Himanshu Puri" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Himanshu Puri</strong>
                      <p class="mb-2">Co-Founder & CBO</p>
                      <a href="https://www.linkedin.com/in/dr-himanshu-puri-ph-d-618a725b/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/rohit_shuka.jpg')}}" alt="Rohit Shukla" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Rohit Shukla</strong>
                      <p class="mb-2">Co-Founder & CTO</p>

                      <a href="https://www.linkedin.com/in/rohitshukla1/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>



                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public./images/team/sanjiv.jpg')}}" alt="Sanjiv Sharma" class=" img-fluid w-100">

                      </div>

                    </div>

                    <div class="caption">
                      <strong>Sanjiv Sharma</strong>
                      <p class="mb-2">HEAD - GLOBAL AFFAIRS</p>
                      <a href="https://www.linkedin.com/in/sanjiv-sharma-02347b10/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>



                  </div>
                </div>



              </div>
            </div>

          <hr class="my-5">


            <div class="team-block">
              <div class="element-wrapper center">

                <h3 class="element-header mb-5 font-weight-bold">
                  Research & Development
                </h3>
              </div>
              <div class="d-flex flex-wrap">


                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public./images/team/shrutipandey.jpg')}}" alt="Shruti Pandey" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Shruti Pandey</strong>
                      <a href="https://www.linkedin.com/in/shruti-pandey-b9021a63/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public./images/team/ambikaprasad.jpg')}}" alt="Ambika Prasad Jena" class=" img-fluid w-100">


                      </div>
                    </div>

                    <div class="caption">
                      <strong>Ambika Prasad Jena</strong>
                      <a href="https://www.linkedin.com/in/ambika-jena-691b275a/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public./images/team/JAISIS_SRIKRISHNA_DAS.jpg')}}" alt="Jaisis Srikrishna Das" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Jaisis Srikrishna Das</strong>
                      <a href="https://www.linkedin.com/in/jaisis-srikrishna-das-30909b5a/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public./images/team/Smuti-Sudha.jpg')}}" alt="Smuti-Sudha" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Smuti Sudha</strong>
                      <a href="https://www.linkedin.com/in/smuti-sudha-a55257166/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/JaydipPati.jpg')}}" alt="Parija Marwah" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Jaydip Pati </strong>
                      <a href="https://www.linkedin.com/in/jaydip-pati-34567068/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/IMG-20180109-WA0015.jpg')}}" alt="Akshita Bhatia" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Geeta Gupta</strong>
                      <a href="https://www.linkedin.com/in/geeta-gupta-00a593119/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>


              </div>


              <div class="d-flex flex-wrap">
                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/akshita.jpg')}}" alt="Parija Marwah" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Akshita bhatia</strong>
                      <a href="https://www.linkedin.com/in/akshita-bhatia-2735a7136/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/sonali.jpg')}}" alt="Parija Marwah" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Sonali Shrivastava</strong>
                      <a href="https://www.linkedin.com/in/sonali-shrivastava-aa543053/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

              </div>



            </div>


          <hr class="my-5">


            <div class="team-block">
              <div class="element-wrapper center">

                <h3 class="element-header mb-5 font-weight-bold">
                  Technology
                </h3>
              </div>


              <div class="d-flex flex-wrap ">




                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/ankit.jpg')}}" alt="Parija Marwah" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Ankit Patidar</strong>
                      <a href="https://www.linkedin.com/in/ankit-patidar-38540216a/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>



                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/yogeshchauhan.jpg')}}" alt="Yogesh Chauhan" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Yogesh Chauhan </strong>
                      <a href="https://www.linkedin.com/in/yogesh-chauhan-99302a143/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/ramesh.jpg')}}" alt="Yogesh Chauhan" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Ramesh</strong>
                      <a href="https://www.linkedin.com/in/ramesh-kumar-69169a35/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          <hr class="my-5">


            <div class="team-block">
              <div class="element-wrapper center">

                <h3 class="element-header mb-5 font-weight-bold">
                  Human Resources
                </h3>
              </div>



              <div class="d-flex flex-wrap ">

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/jeeniavig.jpg')}}" alt="Jeenia Vig" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Jeenia Vig </strong>
                      <a href="https://www.linkedin.com/in/jeenia-vig-832772136/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

              </div>
            </div>

          <hr class="my-5">

            <div class="team-block">
              <div class="element-wrapper center">

                <h3 class="element-header mb-5 font-weight-bold">
                  Sales & Marketing
                </h3>
              </div>



              <div class="d-flex flex-wrap">

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/niranjan.jpg')}}" alt="Jeenia Vig" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Niranjan Jadhav</strong>
                      <a href="https://www.linkedin.com/in/niranjan-jadhav-17790550/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/kallol-pal.jpg')}}" alt="Kallol Pal" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Kallol Pal</strong>
                      <a href="https://www.linkedin.com/in/kallol-pal-73053743/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/kunal-bandiwadekar.jpg')}}" alt="Kunal Bandiwadekar" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Kunal Bandiwadekar</strong>
                      <a href="https://www.linkedin.com/in/kunal-bandiwadekar-5b419427/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/arun-yadav.jpg')}}" alt="Arun Yadav" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Arun Yadav</strong>
                      <a href="https://www.linkedin.com/in/arun-yadav-24454653" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/santosh.jpg')}}" alt="Santosh Choubey" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Santosh Choubey</strong>
                      <a href="https://www.linkedin.com/in/santosh-choubey-69310b28/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

              </div>

            </div>

            <hr class="my-5">


            <div class="team-block">
              <div class="element-wrapper center">

                <h3 class="element-header mb-5 font-weight-bold">
                  Office Help/ Lifeline
                </h3>
              </div>



              <div class="d-flex flex-wrap">

                <div class="thumbnail">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/nitin.jpg')}}" alt="Jeenia Vig" class=" img-fluid w-100">


                      </div>
                    </div>


                    <div class="caption">
                      <strong>Nitin</strong>


                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="tab-pane team-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
            <div class="team-block">
              <div class="d-flex flex-wrap ">

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/shri_jetmalani.jpg')}}" alt="Karan Kalia" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Shri Ram Jethmalani</strong>
                      <a href="https://www.linkedin.com/in/ram-jethmalani-a3424b146/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/nikilesh_ramachandran.jpg')}}" alt="Nikilesh Ramachandran" class="img-fluid w-100">

                      </div>

                    </div>
                    <div class="caption">
                      <strong class="staffName">Nikilesh Ramachandran</strong>
                      <a href="https://www.linkedin.com/in/nikilesh-ramachandran-b112ab2/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/Hitesh-Oberoi.JPG')}}" alt="Ridhima Malhotra" class=" img-fluid w-100">

                      </div>
                    </div>

                    <div class="caption">
                      <strong>Hitesh Oberoi</strong>
                      <a href="https://www.linkedin.com/in/hitesh-oberoi-490260/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/ph_parikh.jpg')}}" alt="Ridhima Malhotra" class=" img-fluid w-100">

                      </div>
                    </div>

                    <div class="caption">
                      <strong>PH Parikh</strong>
                      <a href="#" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="{{asset('public/images/team/amar-kumar-pandey.jpg')}} " alt="amar-kumar-pandey" class=" img-fluid w-100">

                      </div>
                    </div>

                    <div class="caption">
                      <strong>Amar Kumar Pandey</strong>
                      <a href="https://www.linkedin.com/in/amar-kumar-pandey-ips-ph-d-8b5b3018/?originalSubdomain=in" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/team/r-venkatramani.jpg" alt="amar-kumar-pandey" class=" img-fluid w-100">

                      </div>
                    </div>

                    <div class="caption">
                      <strong>Mr. R Venkatramani</strong>
                      <a href="https://www.symlaw.edu.in/our-people/honorary-faculty/182" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="tab-pane team-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
            <div class="team-block">
              <div class="d-flex flex-wrap">
                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/International - Phillip.jpg" alt="Karan Kalia" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Philipp Scheibenpflug</strong>
                      <a href="https://www.linkedin.com/in/dr-philipp-scheibenpflug-160469105/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>



                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/International- Alonso.jpg" alt="Ridhima Malhotra" class=" img-fluid w-100">

                      </div>
                    </div>

                    <div class="caption">
                      <strong>Alonso Sandoval</strong>
                      <a href="https://www.linkedin.com/in/alonsosandoval/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>



                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/International---Sebastian_risso.jpg" alt="Sanjiv Sharma" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Sebastian Risso</strong>
                      <a href="https://www.linkedin.com/in/sebasti%C3%A1n-risso-a3753b57/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>



                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/International - Valentina.jpg" alt="Himanshu Puri" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Valentina Lipatnikova</strong>
                      <a href="https://www.linkedin.com/in/valentinalipatnikova/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/International-Vincenso.jpg" alt="Rohit Shukla" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Vincenzo Dell’Osso</strong>
                      <a href="https://www.linkedin.com/in/vincenzodellosso/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>



                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/International-Valerio.jpg" alt="Rohit Shukla" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Valerio Severo Marotta</strong>
                      <a href="https://www.linkedin.com/in/valerio-severo-marotta-9a6188aa/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>



                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/team/matthew.jpg" alt="Rohit Shukla" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Matthew Humphreys</strong>
                      <a href="https://www.linkedin.com/in/matthew-humphreys-9bb70b91" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/A-Dziki.jpg" alt="Rohit Shukla" class=" img-fluid w-100">

                      </div>
                    </div>


                    <div class="caption">
                      <strong>Aleksandra M. Dziki</strong>
                      <a href="https://www.linkedin.com/in/aleksandradziki/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>


                    </div>
                  </div>
                </div>

              </div>


            </div>
          </div>

          <div class="tab-pane team-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4">
            <div class="team-block">
              <div class="d-flex flex-wrap">



                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/Technical Board-Sheetal bafana.jpg" alt="Sheetal bafana" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Sheetal bafana</strong>
                      <a href="https://www.linkedin.com/in/sheetal-bafna-msc-comp-security-5718b448/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/rahu_gupta.jpg" alt="Rahul Gupta" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong>Rahul Gupta</strong>
                      <a href="https://www.linkedin.com/in/rgprod/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/team/vivek_narayan_sharma.jpg" alt="Vivek Narayan Sharma" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong>Vivek Narayan Sharma</strong>
                      <a href="http://linkedin.com/in/viveknarayan" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


          <div class="tab-pane team-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5">
            <div class="team-block">

              <div class="d-flex flex-wrap">
                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/abhijeet-kashyap.jpg" alt="Abhijeet Kashyap" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Abhijeet Kashyap</strong>
                      <a href="https://www.linkedin.com/in/abhijeet-kashyap-6a10b9165 " class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/achin-sharma.jpg" alt="Achin Sharma" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Achin Sharma</strong>
                      <a href="https://www.linkedin.com/in/achin-sharma-7a57541b/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/aniket-garg.jpg" alt="Aniket Garg" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Aniket Garg</strong>
                      <a href="https://www.linkedin.com/in/aniket-garg-81bb72177" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/anirudh-gupta.jpg" alt="Anirudh Gupta" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Anirudh Gupta</strong>
                      <a href="https://www.linkedin.com/in/anirudh-gupta-750503176" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/amol-verma.jpg" alt="Amol Verma" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Amol Verma</strong>
                      <a href="http://www.linkedin.com/in/amol-verma-34606117a" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/ayush-jain.jpg" alt="Ayush Jain" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Ayush Jain</strong>
                      <a href="https://www.linkedin.com/in/ayush-j-748729128" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/charu-bajaj.jpg" alt="Charu Bajaj" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Charu Bajaj</strong>
                      <a href="https://www.linkedin.com/in/charu-bajaj-032739147" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/divyansh-saluja.jpg" alt="Divyansh Saluja" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Divyansh Saluja</strong>
                      <a href="https://www.linkedin.com/in/divyansh-saluja-3a455414a" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/monika-rahar.jpg" alt="Monika Rahar" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Monika Rahar</strong>
                      <a href="https://www.linkedin.com/in/monika-rahar-b77382130" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/muneeb-rashid-malik.jpg" alt="Muneeb Rashid Malik" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Muneeb Rashid Malik</strong>
                      <a href="https://www.linkedin.com/in/muneeb-rashid-malik-a85876138" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/nikita-raj.jpg" alt="Nikita Raj" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Nikita Raj</strong>
                      <a href="https://www.linkedin.com/in/nikita-raj-585372169" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/pranjal--pranshu.jpg" alt="Pranjal Pranshu" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Pranjal Pranshu</strong>
                      <a href="https://www.linkedin.com/in/pranjal-pranshu-240675146/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/priya_khemchandani.jpg" alt="Priya Khemchandani" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Priya Khemchandani</strong>
                      <a href="https://www.linkedin.com/in/priya-khemchandani-a78339153" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/pundrikaksh-sharma.jpg" alt="Pundrikaksh Sharma" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Pundrikaksh Sharma</strong>
                      <a href="https://www.linkedin.com/in/pundrikaksh-sharma-1b7514112" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/rahul-kumar.jpg" alt="Rahul Kumar" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Rahul Kumar</strong>
                      <a href="https://www.linkedin.com/in/rahul-kumar-sharma-37a6b9171" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/rajat-kumar.jpg" alt="Rajat Kumar" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Rajat Kumar</strong>
                      <a href="https://www.linkedin.com/in/rajat-kumar-0aa512176" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/sharad-trivedi.jpg" alt="Sharad Trivedi" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Sharad Trivedi</strong>
                      <a href="https://www.linkedin.com/in/sharad-t-843302136" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/suman-patra.jpg" alt="Suman Patra" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Suman Patra</strong>
                      <a href="https://www.linkedin.com/in/suman-patra-4197bb110" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/surya-pratap-singh-naruka.jpg" alt="Surya Pratap Singh Naruka" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Surya Pratap Singh Naruka</strong>
                      <a href="https://www.linkedin.com/in/surya-pratap-singh-naruka-664391145" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/utkarsh-sharma.jpg" alt="Utkarsh Sharma" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Utkarsh Sharma</strong>
                      <a href="http://www.linkedin.com/in/utkarshsharmauwsl" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/vaibhav-shahi.jpg" alt="Vaibhav Shahi" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Vaibhav Shahi</strong>
                      <a href="http://linkedin.com/in/vaibhav-shahi-4b215512a" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/jharna-saksena.jpg" alt="Jharna Saksena" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Jharna Saksena</strong>
                      <a href="https://www.linkedin.com/in/jharna-saksena-42ab41142/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/priyanka-porwal.jpg" alt="Priyanka porwal" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Priyanka porwal</strong>
                      <a href="https://www.linkedin.com/in/priyanka-porwal-304a32119/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/manvi-chauhan.jpg" alt="Manvi Chauhan" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Manvi Chauhan</strong>
                      <a href="https://www.linkedin.com/in/manvi-chauhan-76835114b" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/swarnim-singh.jpg" alt="Swarnim Singh" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Swarnim Singh</strong>
                      <a href="https://www.linkedin.com/feed/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/lakshya-soni.jpg" alt="Lakshya Soni" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Lakshya Soni</strong>
                      <a href="https://www.linkedin.com/in/lakshya-soni-353bb017a" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/saksham-grover.jpg" alt="Saksham Grover" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Saksham Grover</strong>
                      <a href="https://www.linkedin.com/in/saksham-grover-300198" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="./images/cap/cap2019/akshay-baweja.jpg" alt="Akshay Baweja" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Akshay Baweja</strong>
                      <a href="https://www.linkedin.com/in/akshay-baweja-b77601153" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/anuj_malik.jpg" alt="Anuj Malik" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Anuj Malik</strong>
                      <a href="https://www.linkedin.com/in/iamanujmalik " class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/abhishek_acharya.jpg" alt="Abhishek Acharya" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Abhishek Acharya</strong>
                      <a href="https://www.linkedin.com/in/abhishek-acharya-371a9a72/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/vidushi_verma.jpg" alt="Vidushi Verma" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Vidushi Verma</strong>
                      <a href="https://www.linkedin.com/in/vidushi-verma-a87a2a151" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/kartikey_joshi.jpg" alt="Kartikeya Joshi" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Kartikeya Joshi</strong>
                      <a href="https://www.linkedin.com/in/kartikey-joshi-688762151" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>


                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/parshanth_yadav.jpg" alt="Prashant Yadav" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Prashant Yadav</strong>
                      <a href="https://www.linkedin.com/in/prashant-yadav-b0377b146" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/arshpreet_khaiyal.jpg" alt="Arshpreet Khadial" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Arshpreet Khadial</strong>
                      <a href="#" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/basuki_nath_pandey.jpg" alt="Basuki Nath Pandey" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Basuki Nath Pandey</strong>
                      <a href="https://www.linkedin.com/in/basuki-nath-pandey-3b6b47151" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/vernika_taya.jpg" alt="Varnika Taya" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Varnika Taya</strong>
                      <a href="https://www.linkedin.com/in/varnika-taya-8b261aa7/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/karan_pandey.jpg" alt="Karan Pandey" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Karan Pandey</strong>
                      <a href="https://www.linkedin.com/in/karan-pandey-49965a149" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/nitish_choudhary.jpg" alt="Nitish Choudhary" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Nitish Choudhary</strong>
                      <a href="#" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/mahek_dalmia.jpg" alt="Mahek Dalmia" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Mahek Dalmia</strong>
                      <a href="https://www.linkedin.com/in/mahek-dalmia-826476150/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/rahul_gupta.jpg" alt="Rahul Gupta" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Rahul Gupta</strong>
                      <a href="https://www.linkedin.com/in/rahul-gupta-26535a12b/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/abhishek_singh.jpg" alt="Abhishek Singh" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Abhishek Singh</strong>
                      <a href="https://www.linkedin.com/in/abhishek-singh-78300312b/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/ashish_yadav.jpg" alt="Ashish Yadav" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Ashish Yadav</strong>
                      <a href="https://www.linkedin.com/in/ashishyadav1994/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>



                </div>

                <div class="thumbnail" style="border: 0px;">
                  <div class="thumb-inner">
                    <div class="liner-box">
                      <div class="member-container">
                        <img src="././images/cap/hardik_jain.jpg" alt="Hardik Jain" class="img-fluid w-100">

                      </div>
                    </div>
                    <div class="caption">
                      <strong class="staffName">Hardik Jain</strong>
                      <a href="https://www.linkedin.com/in/hardik-jain-6b444213a/" class="linkedin-btn d-block">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </section> <!-- END SECTION TEAM -->


@endsection