@extends('layouts.detaillayout')
@section('content')
<div class="overlay">
      <img id="loading_image" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
    </div>
    
        <section class="section judgment-section py-0 bg-gray">
          <div class="d-flex anim justify-content-between">

            <div class="sidebar bg-white p-0">
              <ul class="list-unstyled mb-0">
                <li class="preminum-tag d-flex align-items-center justify-content-between px-3 py-4">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-gem"></i>
                    <span class="h4 font-weight-bold mx-2 mb-0">iDraf</span>

                  </div>
                  <div class="updown-links d-flex">
                    <a class="d-block" href="#">
                      <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </a>
                    <a class="d-block" href="#">
                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <hr class="mt-0">
                <li><a href="#1" class="idraf-link active">
                  <img src="{{asset('public/images/issue.svg')}}" alt="">
                  Issue</a></li>
                <li><a href="#2" class="idraf-link">
                  <img src="{{asset('public/images/reasoning.svg')}}" alt="">
                  Reasoning</a></li>
                <li><a href="#3" class="idraf-link">
                  <img src="{{asset('public/images/arguments.svg')}}" alt="">
                  Argument of P<span>etitioner</span> </a></li>
                <li><a href="#4" class="idraf-link">
                  <img src="{{asset('public/images/arguments.svg')}}" alt="">
                  Argument of R<span>espondent</span> </a></li>
                <li><a href="#5" class="idraf-link">
                  <img src="{{asset('public/images/decision.svg')}}" alt="">
                  Decision</a></li>
                <li><a href="#6" class="idraf-link">
                  <img src="{{asset('public/images/fact.svg')}}" alt="">
                  Facts</a></li>
                <li><a href="#8" class="idraf-link">
                  <img src="{{asset('public/images/act.svg')}}" alt="">
                  Acts</a></li>
                <li><a href="#9" class="idraf-link">
                  <img src="{{asset('public/images/citation.svg')}}" alt="">
                  Case cited</a></li>
              </ul>
            </div>

            <div id="body" class="flex-fill">
              <div class="judgement-topbar shadow-sm bg-white">
               

                <div class="container-fluid d-flex align-items-center mt-2 mb-1">
                  <div class="back-to-result">
                    <a href="#" class="d-block rounded py-1 px-1 font-semibold">
                      <i class="fas fa-angle-left mr-2"></i> <span id="back">Back</span> <span id="results" class="d-none d-lg-inline-block">to Results</span>
                    </a>
                  </div>
                  <div class="text-md-center mx-auto">
                    <h5 id="uniqueh5" class="d-inline font-weight-bold mb-0">Rajendra Kumar v. Gopal Krishna</h5>
                    <span class="dot-separator bg-secondary mx-1"></span>
                    <small class="font-weight-light">Appeal Nos.7763 of 2004</small>
                  </div>

                  <div class="btn-group btn-toolbar-top btn-group-sm">
                    <button type="button" class="btn btn-default py-0 bookmark-btn" data-toggle="tooltip" data-placement="left" title="Bookmark">
                      <i onclick="saveBookMark();" class="lni-bookmark"></i>
                    </button>
                    <button id="nightmode" type="button" class="btn btn-default py-0" data-toggle="tooltip" data-placement="left" title="Night Mode">
                      <i onclick="changeModeNight();" class="lni-night"></i>
                    </button>
                    <button style="display: none;" id="lightmode" type="button" class="btn btn-default py-0" data-toggle="tooltip" data-placement="left" title="Light Mode">
                      <i onclick="changeModeLight();" class="lni-sun"></i>
                    </button>
                    <button type="button" class="btn btn-default py-0" data-toggle="modal" data-target="#report-problem-form">
                      <i class="lni-emoji-sad" data-toggle="tooltip" data-placement="left" title="Report a problem"></i>
                    </button>
                  </div>

                  <!--  <nav class="d-flex align-items-center flex-column flex-md-row  judgment-top-tabs">
                    <ul class="navbar-nav posts__categories-list mr-auto flex-row">
                      <li class="post-category  active"><a href="#0">Cited in</a></li>
                      <li class="post-category"><a href="#0">Advocates</a></li>
                      <li class="post-category"><a href="#0">Bench</a></li>
                        <li class="post-category"><a href="#0">Eq Citations</a></li>
                    </ul>
                  </nav>-->
                </div>
                <nav class="d-flex  align-items-center flex-column flex-md-row  judgment-top-tabs">
                  <ul class="nav nav-tabs posts__categories-list m-auto flex-row" role="tablist">
                    <li class="post-category nav-item  ">
                      <a class="active judgement-tab" href="#0" data-toggle="tab" data-target="#judgement" role="tab">Judgement</a>
                    </li>
                    <li class="post-category">
                      <a class="" href="#0" data-toggle="tab" data-target="#citedin" role="tab">Cited in</a>
                    </li>
                    <li class="post-category">
                      <a class="" href="#0" data-toggle="tab" data-target="#advocate" role="tab">Advocates</a>
                    </li>
                    <li class="post-category">
                      <a class="" href="#0" data-toggle="tab" data-target="#bench" role="tab">Bench</a>
                    </li>
                    <li class="post-category">
                      <a class="" href="#0" data-toggle="tab" data-target="#eqcitation" role="tab">Eq Citations</a>
                    </li>
                  </ul>
                </nav>
              </div>

              <div style="margin-top:-8px;" class="px-4 mx-4  position-relative tab-content">
                <div id="judgement" class="flex-fill pt-4 mt-2 tab-pane fade show active"  role="tabpanel">
                  <div class="judgment-detail-header text-center">

                    <h1 class="mb-3 font-weight-bold">Chandrashekhar Verma
                      <br>
                      v.
                      <br>
                      State of M.P.
                    </h1>
                    <p class="mb-4 font-semibold">Civil Appeal Nos.7763 of 2004 - 7764 of 2004 | 02-12-2004</p>

                    <h4><span class="badge badge-warning d-inline-block py-2 px-2 ">Status - Disposed</span></h4>

                  </div>

                  <div class=" py-2">
                    <div class="d-flex mb-1 justify-content-center">
                      <strong class="text-primary mr-3 font-weight-bold">Bench</strong>
                      <div class="text-dark">
                        <span class="">Arijit Pasayat</span>,
                        <span class="">Ruma Pal</span>,
                        <span class="">C.K. Thakker</span>,
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div class="igraph mt-4">
                    <img src="{{asset('public/images/igraph.png')}}" alt="" class="w-100">
                  </div>
                  <hr>

                  <div class="main-detail-content mt-4  mb-5">
                    <p id="1"><strong>Dr. B.S. Chauhan, J.</strong><br><br>1. This appeal has been preferred against the impugned judgment and decree dated 1.12.2009 in Regular Second Appeal No.2299 of 2009, passed by the High Court of Punjab &amp; Haryana
                      at Chandigarh, affirming the judgment and decree dated 16.9.2008, passed by the Additional District Judge, Amritsar in Civil Appeal No.122 of 14.6.2006 as well as the judgment and decree dated <a href="#"> 23.5.2006</a>, passed by
                      the Civil
                      Judge (Sr. Division) <a href="#">Amritsar in Civil Suit No.275 of 2004</a>, wherein and whereunder the courts have dismissed the suit of the appellant for grant of retiral benefits for not being Government servant.<br><br>2. Facts
                      and circumstances
                      giving rise to this appeal are as under:</p>
                    <blockquote>
                      <p id="4"><span id="selectedfacts-1" tabindex="1">A. That the appellant had worked in the Army as Truck driver from 26.10.1962 to 10.1.1968. He was subsequently employed as a truck driver in the <a href="#">Fish Farmers Development
                            Agency from 16.7.1980 to 20.5.1998</a>. After being declared surplus, he was absorbed in the Animal Husbandry, Fisheries and Dairy Development, Punjab on 1.6.1998 and stood superannuated on 31.3.2002.<br><br><span
                            id="selectedissue-1" tabindex="1">B. The appellant instituted Civil Suit <a href="#">No.275 of 2004</a> claiming retrial benefits in view of letter dated 20.4.1998 issued by the Govt. of Punjab which provided for
                            regularisation of ad hoc employees by absorbing them against the departmental posts. The said suit was dismissed vide judgment and decree dated 23.5.2006.</span><br><br>C.
                          Aggrieved, the appellant preferred Civil <a href="#">Appeal No.122 of 2006</a>. It was also dismissed vide judgment and decree dated 16.9.2008.<br><br>D. Aggrieved, the appellant preferred the Regular Second Appeal which has
                          been dismissed
                          vide impugned judgment and decree</span>.</p>
                    </blockquote>
                    <p id="2"><br>Hence, this appeal.<br><br>3. <span id="selectedargofpetitioner-1" tabindex="1">Shri D.K. Garg, learned counsel appearing for the appellant has submitted that as the appellant had been absorbed in the <a href="#">Fish Farmers
                          Development Agency</a>, he is entitled to take the benefit of entire service rendered in various places. Thus, the courts below committed an error in refusing the relief of pension and other retrial benefits. The appellant had
                        been given a hostile discrimination while a similarly situated person, namely, Charanjit Lal got a decree from the Civil Court, Gurdaspur on <a href="#">16.9.1996 in Suit No.4 of 1992</a> . Thus, the appeal deserves to be
                        allowed.</span><br><br>
                      <span id="selectedargofresponder-1" tabindex="1">4. Per contra, Shri Jagjit Singh Chhabra, learned counsel appearing for the State has opposed the appeal contending that the Fish Farmers Development Agency is a society registered
                        under the Societies Registration Act, 1860
                        (hereinafter referred to as Act 1860). If a civil court had granted the relief by mistake or the plaintiff therein succeeded in getting a collusive decree, which is contrary to law, its benefit cannot be extended to other
                        similarly situated persons for the reason that Article 14 of the Constitution is not meant to perpetuate an illegality. Thus, the appeal is liable to be dismissed.</span><br><br>5. We have considered
                      the rival submissions made by learned counsel for the parties and perused the record.<br><br>6. Before we proceed further, it may be pertinent to mention here that appellant after retirement had approached the High Court by
                      filing the Writ Petition No.1505 of 2004 (Chaman Lal v. State of Punjab &amp; Ors.) seeking relief of proficiency set up, against the State wherein the High Court refused the relief by recording a finding that the Fish Farmers
                      Development Agency, Amritsar was neither a Government agency nor a department but rather was a society registered under the Act 1860.<br><br>7. The Trial Court considered the issue of entitlement of the appellant for the aforesaid
                      relief and held as under:</p>
                    <blockquote>
                      <p id="3">“Division Bench of Hon’ble Punjab &amp; Haryana High Court in the State of Punjab &amp; Anr. v. Shri D.N. Rampal, Deputy Advocate General, 1985 (1) SLR 14, where Hon’ble Punjab &amp; Haryana High Court held that Rule 3.12
                        provides
                        three qualifications for pension. It says that the service of a Government employee does not qualify for pension unless it conforms to three conditions l(i) the service must be under Government, (ii) the employment must be
                        substantive and permanent and (iii) the service must be paid by Government.<br><br>Counsel for the plaintiff argued that in the present case all three conditions are fulfilled so the plaintiff is entitled to regularization
                        of his services as per the provisions of Punjab Civil Services Rules, Volume-II, Rule 3.16, where the Govt. pleader for the defendant/State argued that the plaintiff cannot claim benefit of service rendered by him prior to
                        1.6.1998 as services rendered by him in Fish Farmer Development Agency from 20.5.1980 to 31.5.1998 was rendered by him in a society registered under the societies Act and regarding this fact a categorical findings has been
                        recorded by the Hon’ble Punjab and Haryana High Court in Civil Writ Petition No.1501 of 2001 between the parties and the copy of order is Ex.D3 perusal of the order of Hon’ble Punjab &amp; Haryana High Court in Civil Writ
                        Petition No.1501 titled ‘Chaman Lal v. State of Punjab &amp; Ors. shows that in that case also the question involved was that whether services rendered by the plaintiff in Fish Farm Development Agency, Amritsar can be considered
                        for the purpose of proficiency step up to the plaintiff and the Hon’ble Punjab &amp; Haryana High Court recorded a findings that the same cannot be considered for proficiency step up. The relevant portion of the findings
                        recorded by the Hon’ble Punjab &amp; Haryana High Court is reproduced as under:-<br><br>‘It has been stated in the preliminary objection that the petitioner was appointed in the office of Fish Farm Development Agency, Amritsar,
                        as a Truck Driver on a non-pensionable post. The Agency is a registered society under the societies Registration Act, 1860. It is an autonomous body. It is not a part of the department of Fisheries Punjab. In fact, the
                        petitioner
                        was appointed as a driver in the Department of Fisheries by the Director and warden only on 22.5.1998. In view of the above, no relief can be granted to the petitioner.’<br><br>So when the Hon’ble Punjab &amp; Haryana High
                        Court has recorded categorical findings that the services rendered by the plaintiff prior to 22.5.1998 was rendered by him in a society registered under the Societies Registration Act, then the plaintiff cannot be held to
                        be in service under the Govt. prior to 22.5.1998, so his service rendered prior to that date cannot be considered for the purpose of calculation of pension. So all these issues are decided against the plaintiff and in favour
                        of the defendants.”</p>
                    </blockquote>
                    <p id="5"><br>8. The First Appellate Court re-appreciated the entire evidence, on the issue. After making reference to the judgment of the High Court rendered in the case of the appellant, the court held:</p>

                  </div>
                </div>


                <div id="citedin" class="flex-fill pt-4 mt-2 tab-pane fade"  role="tabpanel">
                  <div class="citedin-content pb-5">

                  <div class="block d-md-flex align-items-center">
                    <div class="flex-fill">
                      <h4 class="font-weight-bold">Palani &amp; Others .Vs State represented by Inspector of Police</h4>
                      <p class="d-block mb-3">Supreme Court Of India | <span>LQ 2008 HC 11809</span> </p>
                      <div class="">
                        <p class="mb-1">20. In A. <span class="text-primary">JAYACHANDRA</span> VS. <span class="text-primary">ANEEL KAUR</span> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sint, nam delectus quod qui incidunt cum cupiditate beatae voluptate, impedit ullam quidem, quos amet est fugiat! Maiores saepe, voluptas magni. Iusto accusamus quae
                          vitae in itaque...</p>
                      </div>
                    </div>
                    <div class="graph">
                      <img src="{{asset('public/images/citation-graph.png')}}" alt="">
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="block d-md-flex align-items-center">
                    <div class="flex-fill">
                      <h4 class="font-weight-bold">Palani &amp; Others .Vs State represented by Inspector of Police</h4>
                      <p class="d-block mb-3">Supreme Court Of India | <span>LQ 2008 HC 11809</span> </p>
                      <div class="">
                        <p class="mb-1">23. In A. <span class="text-primary">JAYACHANDRA</span> VS. <span class="text-primary">ANEEL KAUR</span> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sint, nam delectus quod qui incidunt cum cupiditate beatae voluptate, impedit ullam quidem, quos amet est fugiat! Maiores saepe, voluptas magni. Iusto accusamus quae
                          vitae in itaque...</p>
                      </div>
                    </div>
                    <div class="graph">
                      <img src="{{asset('public/images/citation-graph.png')}}" alt="">
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="block d-md-flex align-items-center">
                    <div class="flex-fill">
                      <h4 class="font-weight-bold">Palani &amp; Others .Vs State represented by Inspector of Police</h4>
                      <p class="d-block mb-3">Supreme Court Of India | <span>LQ 2008 HC 11809</span> </p>
                      <div class="">
                        <p class="mb-1">20. In A. <span class="text-primary">JAYACHANDRA</span> VS. <span class="text-primary">ANEEL KAUR</span> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sint, nam delectus quod qui incidunt cum cupiditate beatae voluptate, impedit ullam quidem, quos amet est fugiat! Maiores saepe, voluptas magni. Iusto accusamus quae
                          vitae in itaque...</p>
                      </div>
                    </div>
                    <div class="graph">
                      <img src="{{asset('public/images/citation-graph.png')}}" alt="">
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="block d-md-flex align-items-center">
                    <div class="flex-fill">
                      <h4 class="font-weight-bold">Palani &amp; Others .Vs State represented by Inspector of Police</h4>
                      <p class="d-block mb-3">Supreme Court Of India | <span>LQ 2008 HC 11809</span> </p>
                      <div class="">
                        <p class="mb-1">23. In A. <span class="text-primary">JAYACHANDRA</span> VS. <span class="text-primary">ANEEL KAUR</span> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sint, nam delectus quod qui incidunt cum cupiditate beatae voluptate, impedit ullam quidem, quos amet est fugiat! Maiores saepe, voluptas magni. Iusto accusamus quae
                          vitae in itaque...</p>
                      </div>
                    </div>
                    <div class="graph">
                      <img src="{{('public/images/citation-graph.png')}}" alt="">
                    </div>
                  </div>
                </div>
                </div>


                <div id="advocate" class="flex-fill pt-4 mt-2 tab-pane fade"  role="tabpanel">
                  <h3 class=" text-center font-weight-bold">Advocates List</h3>
                  <div class="text-center">
                    <div class="separator bg-primary d-inline-block mt-1 mb-5"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <h5 class="mb-2 font-weight-bold">For Petitioner</h5>
                      <ul class="list-group mb-4">
                        <li class="list-group-item py-2">Shekhar Naphade</li>
                        <li class="list-group-item py-2">Mahesh Agrawal</li>
                        <li class="list-group-item py-2">Tarun Dua</li>

                      </ul>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mb-2 font-weight-bold">For Respondent</h5>
                      <ul class="list-group mb-4">
                        <li class="list-group-item py-2">S. Vani</li>
                        <li class="list-group-item py-2">B. Sunita Rao</li>
                        <li class="list-group-item py-2">Sushil Kumar Pathak</li>

                      </ul>
                    </div>
                  </div>
                </div>

                <div id="bench" class="flex-fill pt-4 mt-2 tab-pane fade"  role="tabpanel">

                  <h3 class=" text-center font-weight-bold">Bench List</h3>
                  <div class="text-center">
                    <div class="separator bg-primary d-inline-block mt-1 mb-5"></div>
                  </div>



                  <div class="text-center">
                    <h4 class="d-inline-block"><span class="badge badge-pill badge-secondary px-4 py-3 font-semibold">HON'BLE Mrs. Justice Ruma Pal</span></h4>
                    <h4 class="d-inline-block"><span class="badge badge-pill badge-secondary px-4 py-3 font-semibold">HON'BLE Mr. Justice Arijit Pasayat</span></h4>
                    <h4 class="d-inline-block"><span class="badge badge-pill badge-secondary px-4 py-3 font-semibold">HON'BLE Mr. Justice C.K. Thakker</span></h4>
                  </div>
                </div>

                <div id="eqcitation" class="flex-fill pt-4 mt-2 tab-pane fade"  role="tabpanel">

                  <h3 class=" text-center font-weight-bold">Eq Citation</h3>
                  <div class="text-center">
                    <div class="separator bg-primary d-inline-block mt-1 mb-5"></div>
                  </div>



                  <div class="text-center">
                    <h4 class="d-inline-block"><span class="badge badge-pill badge-secondary px-4 py-3 font-semibold">2010 (3)MPLJ 463</span></h4>
                    <h4 class="d-inline-block"><span class="badge badge-pill badge-secondary px-4 py-3 font-semibold">5-7 SCC 1980 3, 5</span></h4>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section> <!-- END Section Hero -->
        <aside class="notes-section anim shadow d-flex">
      <div class="notes-controls bg-white">
        <ul class="nav nav-tabs flex-column h-100 pt-9">
          <li class="nav-item px-2 py-2">
            <button type="button" class="nav-link border-0 p-0" data-toggle="tooltip" data-placement="right" title="" data-original-title="Facebook">
                  <img src="{{asset('public/images/facebook.svg')}}" alt="" width="16">
            </button>
          </li>
          <li class="nav-item px-2 py-2">
            <button type="button" class="nav-link border-0 p-0" data-toggle="tooltip" data-placement="right" title="" data-original-title="Twitter">
              <img src="{{asset('public/images/twitter.svg')}}" alt="" width="16">
            </button>
          </li>
          <li class="nav-item px-2 py-2">
            <button type="button" class="nav-link border-0 p-0" data-toggle="tooltip" data-placement="right" title="" data-original-title="Linkedin">
              <img src="{{asset('public/images/linkedin.svg')}}" alt="" width="16">
            </button>
          </li>

          <li class="nav-item px-2 py-2">
            <button type="button" class="nav-link border-0 p-0" data-toggle="tooltip" data-placement="right" title="" data-original-title="Mail">
              <img src="{{asset('public/images/email.svg')}}" alt="" width="16">
            </button>
          </li>
          <li class="nav-item px-2 py-2 notes">
            <button type="button" class="nav-link border-0 p-0 notes-btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Note">
              <img src="{{asset('public/images/agenda.svg')}}" alt="" width="16">
            </button>
          </li>
          <li class="nav-item px-2 py-2" data-toggle="tooltip" data-placement="right" title="" data-original-title="Print">
            <button type="button" class="nav-link p-0 border-0 p-0" data-toggle="modal" data-target="#print-modal">
              <img src="{{asset('public/images/printer.svg')}}" alt="" width="16">
            </button>
          </li>

        </ul>

      </div>

      <div class="notes-content flex-fill bg-gray">
        <form method="POST" name="detail_note_form">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane  fade " id="note-form" role="tabpanel" aria-labelledby="home-tab">
            <div class="pt-3 px-4 d-flex align-items-center">
              <!--
              <a href="#" class="tab-link" data-toggle="tab" data-target="#note-list" role="tab">
              <svg xmlns="http://www.w3.org/2000/svg" id="Layer" enable-background="new 0 0 64 64" viewBox="0 0 64 64" width="22px"><path d="m54 30h-39.899l15.278-14.552c.8-.762.831-2.028.069-2.828-.761-.799-2.027-.831-2.828-.069l-17.448 16.62c-.755.756-1.172 1.76-1.172 2.829 0 1.068.417 2.073 1.207 2.862l17.414 16.586c.387.369.883.552 1.379.552.528 0 1.056-.208 1.449-.621.762-.8.731-2.065-.069-2.827l-15.342-14.552h39.962c1.104 0 2-.896 2-2s-.896-2-2-2z"/></svg>
              </a>
            -->
              <div class="mr-auto">
                <select class="selectpicker show-tick" name="fact" id="fact" data-width="fit">
                  <option>Reasoning</option>
                  <option>Arguments Of Petitioner</option>
                  <option>Facts</option>
                  <option>Case Cited</option>
                  <option>Decision</option>
                  <option>Issue</option>
                  </select>
              </div>
              <a href="#" class="close-notes tab-link" data-toggle="tab" data-target="#note-list" role="tab">
                <svg width="12px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                    <g><g><path d="M294.111,256.001L504.109,46.003c10.523-10.524,10.523-27.586,0-38.109c-10.524-10.524-27.587-10.524-38.11,0L256,217.892    L46.002,7.894c-10.524-10.524-27.586-10.524-38.109,0s-10.524,27.586,0,38.109l209.998,209.998L7.893,465.999    c-10.524,10.524-10.524,27.586,0,38.109c10.524,10.524,27.586,10.523,38.109,0L256,294.11l209.997,209.998    c10.524,10.524,27.587,10.523,38.11,0c10.523-10.524,10.523-27.586,0-38.109L294.111,256.001z"/>
                    </g></g>
                </svg>
              </a>
            </div>
            <hr class="mb-0">
            <div class="notes-form p-4  slimScroll">
               <div class="form-group">
                <input type="hidden" class="form-control" value="2" name="notetype" id="notetype">
            </div>
               
               <div class="alert alert-success" style="display: none;" id="addmessage"></div>
              <div class="form-group">
                <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Enter Note Title">
              </div>

              <div class="form-group">
                <textarea name="description" id="description" rows="5" cols="80" class="form-control text-editor" placeholder="Enter Discription Here"></textarea>
              </div>
              <div class="sidebar-action-btn">
               <!--  <button class="btn btn-dark btn-sm px-3 py-1" name="button"><small> Clear</small></button> -->
                <button onclick="detailAddNote();" class="btn btn-primary btn-sm px-3 py-1" type="button" name="button"><small>Save</small> </button>
             <!--    <button class="btn btn-primary btn-sm px-3 py-1" name="button"><small>Share</small></button> -->
              </div>

            </div>
          </div>

          <div class="tab-pane   fade show active" id="note-list" role="tabpanel" aria-labelledby="profile-tab">
            <div class="pt-3 px-4 d-flex align-items-center">
              <h4 class="font-weight-bold mr-auto mb-0">My Notes</h4>
              <a href="#" class="close-notes">
                <svg width="12px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                    <g><g><path d="M294.111,256.001L504.109,46.003c10.523-10.524,10.523-27.586,0-38.109c-10.524-10.524-27.587-10.524-38.11,0L256,217.892    L46.002,7.894c-10.524-10.524-27.586-10.524-38.109,0s-10.524,27.586,0,38.109l209.998,209.998L7.893,465.999    c-10.524,10.524-10.524,27.586,0,38.109c10.524,10.524,27.586,10.523,38.109,0L256,294.11l209.997,209.998    c10.524,10.524,27.587,10.523,38.11,0c10.523-10.524,10.523-27.586,0-38.109L294.111,256.001z"/>
                    </g></g>
                </svg>
              </a>
            </div>
            <hr class="mb-0">

            <div class="slimScroll">
              <div class="px-3 mt-3">
                <button type="button" class="tab-link btn btn-link add-notes-btn py-2 px-4 d-inline-flex align-items-center" data-toggle="tab" data-target="#note-form" role="tab">
                  <svg class="mr-2" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 448"><path fill="#3646eb" d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0"/></svg>
                      Add a Notes
                </button>
              </div>

              <div class="notes-list p-4 ">
                @foreach($data as $key=> $value)
                <div class="card p-0 mb-0 border-0 bg-transparent">
                  <div class="card-body p-0">
                    <div class="d-flex">
                      <div class="flex-fill mr-2">
                        <a data-toggle="modal" data-target="#showNotebookNoteDetail" onclick="getNoteDetailId({{$value->id}});" href="#" class="h6 mb-1 text-dark d-block">{{$value->title}}</a>
                        <small class="d-block">{{$value->date_created}}</small>
                      </div>
                      <div class="d-flex  align-items-start">
                        <a  class="d-inline-block mr-2" data-toggle="tooltip" data-placement="bottom" title="share">
                          <i style="cursor: pointer;" data-toggle="modal" data-target="#shareform" onclick="generateURL({{$value->id}});" class="lni-share"></i>
                        </a>
                        <a class="d-inline-block" data-toggle="tooltip" data-placement="bottom" title="Delete">
                          <i style="cursor: pointer;" data-toggle="modal" data-target="#deletemodal" onclick="getNoteId({{$value->id}});" class="lni-trash"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                 <hr>
                @endforeach   
              </div>

            </div>
          </div>
        </div>
      </form>

      </div>

    </aside>
     <div class="alert-notifications-wrapper">

    <div id="success-notification" class="alert alert-validation alert-success alert-dismissible fade" role="alert">
      <span class="notification-text">Thank you for subscribing! Please check your inbox to opt-in.</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> <!-- Subscribe Success -->

    <div id="subscribe-error-notification" class="alert alert-validation alert-danger alert-dismissible fade" role="alert">
      Oh no, error happened! Please check the email address and/or try again.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> <!-- Subscribe Error -->

  </div> <!-- END Alert Notifications Wrapper -->

  <div class="dropdown-menu popup-tag shadow" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item py-2" href="#">Copy with Citation</a>
    <a class="dropdown-item py-2" href="#">Copy as Parenthetical Citation</a>
    <a class="dropdown-item py-2" href="#"><span class="dot-separator bg-warning mx-2"></span> Highlight</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item py-2" href="#"><i class="fas fa-cog"></i> Citation Format</a>
  </div>



<!--Modal for Showing Notes Detail from Notebook Starts here-->

<div class="modal" id="showNotebookNoteDetail" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div style="border-radius: 0px;" class="modal-content">
        
        <div class="modal-body">
          <input type="hidden" id="showNotebookNoteId">
          <h3 style="text-align: left; text-decoration: underline;" id="notetitle"></h3>
          <p style="text-align: left; text-align: justify; font-size: 13px;" id="notedescription"></p>
          Date Created: <p style="text-align: left;" id="notedate"></p>
        </div>
        <div style="border-style:none;" class="modal-footer">
        <button type="button" class="close btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<!--Modal for Showing Notes Detail from Notebook Ends here-->


<!--Modal for Showing Success Message in Bookmark Starts here-->

<div class="modal" id="messagebookmark" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div style="border-radius: 0px; background-color: #4d5bed; width: 60%; margin: auto;" class="modal-content">
        
        <div class="modal-body" id="namit">
          <!-- <input type="hidden" id="showNotebookNoteId"> -->
          <!-- <h3 style="text-align: left; text-decoration: underline;" id="notetitle"></h3> -->
          <p style="text-align: center; font-size: 17px; color:#fff" id="successmessage"></p>
          <!-- Date Created: <p style="text-align: left;" id="notedate"></p> -->
        </div>
        <div style="border-style:none;" class="modal-footer">
        <button style="color:white;" type="button" onclick="hidemodal();" class="close btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<!--Modal for Showing Success Message in Bookmark Ends here-->


  <!-- Modal -->
<div class="modal fade report-problem-form" data-backdrop="static" data-keyboard="false" id="report-problem-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Report a problem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div style="display: none; text-align:center; font-size: 16px; color:green;" id="message3"></div>
         <div class="overlay">
          <h5 id="loader_message3" style="display:none; text-align: center;">Sending your Problem Please wait....</h5>       
          <img id="loading_image3" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
            <div class="prblem-area form-group">
              <label for="">Problem Area</label>
              <div class="">
                <select name="problem_area" id="problem_area" class="selectpicker-modal form-control" multiple data-selected-text-format="count > 4" title="Select Problem Area">
                  <option>Content</option>
                  <option>Segregation</option>
                  <option>Judge Name</option>
                  <option>Court</option>
                  <option>Citation</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description123" id="description123" rows="3" cols="25"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="resetForm();" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" onclick="saveProblem();" class="btn btn-primary btn-sm">Send</button>
      </div>
    </div>
  </div>
</form>
</div>



<div class="modal print-modal" id="print-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Print Judgment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body bg-gray">
        <div class="overlay">
          <h5 id="loader_message4" style="display:none; text-align: center;">Downloading PDF Please Wait.....</h5>       
          <img id="loading_image4" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
        <div class="row">
          <div class="col-sm-6 text-center">
            <h6 class="font-weight-bold mb-3">In One Column</h6>
            <a id="c1" class="print-item d-block position-relative">
            <figure  class="p-4 bg-white mb-4 rounded ">
              <img src="{{asset('public/images/onecolumn.png')}}" alt="" class="d-block w-100  shadow-sm">
              <figcaption>
                <span style="cursor: pointer;"  onclick="printjudgment1();" class="mb-2"><i class='lni lni-printer'></i></span>
              </figcaption>
            </figure>
            </a>
          </div>
          <div  class="col-sm-6 text-center">
            <h6 class="font-weight-bold mb-3">In Two Column</h6>
            <a id="c2" class="print-item d-block position-relative">
            <figure class="p-4 bg-white mb-4 rounded shadow-sm ">
              <img  src="{{asset('public/images/twocolumn.png')}}" alt="" class="d-block w-100">
              <figcaption>
                <span style="cursor: pointer;" target="_blank" onclick="printjudgment2();" class="mb-2"><i class='lni lni-printer'></i></span>
              </figcaption>
            </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Delete Note Modal -->
  <div class="modal" id="deletemodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="width:63%; margin:auto; border-radius:0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="deletenote">
          <div style="display: none; margin:auto; font-size: 14px; color:green; margin-left:50px;" id="message1"></div>
          <div class="overlay">
          <h5 id="loader_message2" style="display:none; text-align: center;">Deleting Note..</h5>       
          <img id="loading_image2" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p>Are you sure you want to delete this note?</p>
        </div>
        <div style="border-style:none;" class="modal-footer">
          <button style="padding-left:10px; padding-right: 10px; padding-top: 3px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" class="btn btn-success btn-sm pull-right" onclick="removemessage();" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <button style="padding:5px; font-size: 15px; border-radius: 0px;" type="button" onclick="deletenote();" class="btn btn-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>

        </div>
      </div>
      
    </div>
  </div>
  
<div data-backdrop="static" data-keyboard="false" class="modal fade shareform" id="shareform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border:0px solid #FF9900;">

  <div class="modal-dialog modal-dialog-centered " role="document">
    <form method="POST" action="{{route('sharenote')}}" name="shareform" id="shform"> 
      @csrf()
    <div style="width:124%;" class="modal-content">
      <div class="modal-header">
        <p id="sharenotetitle" class="modal-title"></p><br>
        <div style="display: none; margin:auto; font-size: 16px; color:green;" id="message"></div>
        <button type="button" class="close" onclick="resetform();" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="background:#fff;">
      
        <div style="max-height: 200px; padding: 2rem 1rem;" class="jumbotron jumbotron-size namit" >
          <div class="overlay">
          <h5 id="loader_message" style="display:none; text-align: center;">Sharing your Note please wait....</h5>       
          <img id="loading_image1" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p style="font-size: 13px;" class="share"><strong>Shareable link</strong>
            <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round toggle-small"></span> </label>
            <span style="color:green;"><b>Enabled</b></span> </p>
          <span style="margin-top:-56px; color:#0081c2; float:right; font-size:13px; padding-top:15px;" onclick="copytext();" style="cursor: pointer;" class="pull-right">Copy Link</span>
          <input style="border-radius: 0px; padding: 20px; max-height:20px;
" class="form-control" type="text" name="generateurl" id="generateurl">
<!-- <div id="generateurl"></div> -->
          <div class="BgqMSSe4i5Xcx4ovi-L97 vxdNx4zxpyzFVmrRhysgV _204SBFKyNSu1zYD0gtU2Xo" style="padding:10px 0px 10px 0px; font-size:13px;">
           
             </div>
        </div>
        <p style="font-size: 13px;" class="share">Invite People</p>
        <input style="border-radius: 0px; padding:10px; max-height: 41px;
" class="form-control" type="text" name="email" id="email" placeholder="Enter Email">

<div style="display: none;" style="padding:6px; border:1px solid #ccc;" id="emails"></div>

<input type="hidden" id="noteid" name="noteid">
        <span id="error1"></span>
        <p style="font-size:13px; padding:10px 0px 10px 0px; color:#999999;">Others may have access to this note if it is also in a shared notebook.</p>

         <button type="button" onclick="sharenote();" class="btn btn-success btn-sm pull-right" style="color:#ffffff; background-color: green; font-size:14px;  padding-left: 24px; padding-right: 24px; padding-top:10px;  border-style: none; border-radius: 5px; float: right; ">Share Note</button>
      
          <button onclick="resetform();" class="btn btn-success btn-sm pull-right" style="color:#000; font-size:14px; padding-left: 24px; padding-right: 24px; padding-top:8px; border:1px solid #ccc; background-color: #eee; border-radius: 5px; float: right; margin-right: 10px;" class="close" data-dismiss="modal">Cancel</button>
      </div>
</form>


  <!-- <section class="accordion-section clearfix mt-3123" aria-label="Question Accordions">
  <div class="container">
   -->
  
    <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> -->
    <!-- <div class="panel panel-default"> -->
     <!--  <div class="panel-heading p-3123 mb-3" role="tab" id="heading0">
      <p class="panel-title">
        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
        Who has access (1+)
        </a>
      </p>
      </div> -->
     <!--  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0" style="border:0px solid #FF3300; margin:auto; padding:0px;"> -->
     <!--  <div class="panel-body px-3123 mb-4" style="margin:auto; padding:0px;"> -->

       
             <!--  <div class="BgqMSSe4i5Xcx4ovi-L97 vxdNx4zxpyzFVmrRhysgV _204SBFKyNSu1zYD0gtU2Xo" style="border-top:1px solid #d0d0d0; margin:auto; padding:10px; font-size:13px;">
            <img src="https://img.icons8.com/ios-filled/24/000000/user-male-circle.png">
           shankar.kumar@legitquest.com (you)<span class="_18hcszCROJlwWW4T8m7H5T" style="float:right;">Can edit and invite</span> </div> -->
            
            
                <!-- <div class="BgqMSSe4i5Xcx4ovi-L97 vxdNx4zxpyzFVmrRhysgV _204SBFKyNSu1zYD0gtU2Xo" style="border-top:1px solid #d0d0d0; border-bottom:1px solid #d0d0d0; margin:auto; padding:10px; padding:10px; font-size:13px;">
                <img src="https://img.icons8.com/ios-filled/24/000000/user-male-circle.png">
                Anyone with the link <span class="_18hcszCROJlwWW4T8m7H5T" style="float:right;">Can view</span> 
              </div> -->
      <!-- </div> -->
      <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
  </div>

</section>



@endsection

