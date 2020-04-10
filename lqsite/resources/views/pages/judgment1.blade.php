@extends('layouts.judgment-layout')
@section('content')
     <section class="search-listing-section bg-white py-0">
      <div class="row no-gutters position-relative">
        <div class="posts__wrapper col-lg-9 mb-5 mb-lg-0 order-lg-2 bg-gray">
          <div class="search-top-bar mb-0 bg-white">
            <div class=" px-4 ">
              <nav class="d-flex align-items-center flex-column flex-md-row">
                <ul class="navbar-nav posts__categories-list mr-auto flex-row">
                  <li class="post-category filter-togle d-block d-lg-none"><a class="" href="#0"><i class="fas fa-filter mr-1"></i> <span class="filter-text">Filter</span> </a></li>
                  <li class="post-category  active"><a href="#0">Judgment</a></li>
                  <li class="post-category"><a href="#0">Acts</a></li>
                  <li class="post-category"><a href="#0">Orders</a></li>
                    <li class="post-category"><a href="#0">Procedure</a></li>
                </ul>


              </nav>
            </div>

          </div>

          <div class="bg-white mb-4 shadow-sm">
            <div class=" px-4 py-3">

              <div class="filter-item d-inline-flex align-items-center mr-2">
                <span>AIR 1939 All</span>
                <a href="#" class="remove-selected">×</a>
              </div>

              <div class="filter-item d-inline-flex align-items-center  mr-2">
                  <span>Pancham singh</span>
                  <a href="#" class="remove-selected">×</a>
              </div>

              <div class="filter-item d-inline-flex align-items-center  mr-2">
                  <span>403 (FB)</span>
                  <a href="#" class="remove-selected">×</a>
              </div>
            </div>
          </div>

          <div class="px-4 ">
            <div id="resultStats" class="mb-4 ">
              <span class=""><strong>17312</strong> results found sorted by</span>
              <span class="text-muted"> </span>
              <select class="sort-by">
                <option value="order_rel">Relevance</option>
                <option value="order_dec_date">Newest</option>
                <option value="order_asc_date">Oldest</option>
                <option value="order_random">Random</option>
            </select>
            </div>
            <div class="row no-gutters">
              <div class="col-md-12 mb-4">
                <div class="post card h-100 p-0 border-0 bg-transparent">
                  <div class="card-body p-0">

                    <a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary">
                      <u>Koshalya Rani Gopal Singh V. Gopal Singh Jhanda Singh</u>
                      <img src="{{asset('public/images/caution.svg')}}" class="ml-2" alt="" height="22px">
                    </a>
                    <p class="card-text text-success mb-1">
                       High Court Of Punjab And Haryana | 31-10-1961
                    </p>
                    <p class="mb-1 detailed-text">
                      <b>Judgment : </b>(1.) PURSUANT to a complaint made by Mst. Kaushiya Rani, <strong class="bg-light">Gopal Singh</strong> was committed to the court of. of a previous Full Bench in Durag Pal <strong class="bg-light">Singh</strong> v. Pancham <strong class="bg-light">singh</strong>, AIR 1939 All 403 (FB), to the effect. meaning of Section 29. A Division Bench of this Court consisting of Teja...
                    </p>

                    <a href="#/" class="popup-open search-link mr-3">
                      <small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small>
                    </a>
                    <a href="#/" class="popup-open judge-link mr-3">
                      <small><i class="fas fa-user-tie"></i> Judges</small>
                    </a>

                  </div>

                  <div class="card-footer pb-4 bg-dark d-none">

                  </div>
                </div> <!-- Card for a Post/Artile -->
              </div>

              <div class="col-md-12 mb-4">
                <div class="post card h-100 p-0 border-0 bg-transparent">
                  <div class="card-body p-0">

                    <a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary">
                      <u>Koshalya Rani Gopal Singh V. Gopal Singh Jhanda Singh Koshalya Rani Gopal...</u>
                      <img src="{{asset('public/images/positive.svg')}}" class="ml-2" alt="" height="22px">
                    </a>
                      <p class="card-text text-success mb-1">
                         High Court Of Punjab And Haryana | 31-10-1961
                      </p>
                      <p class="mb-1 detailed-text">
                        <b>Judgment : </b>(1.) PURSUANT to a complaint made by Mst. Kaushiya Rani, <strong class="bg-light">Gopal Singh</strong> was committed to the court of. of a previous Full Bench in Durag Pal <strong class="bg-light">Singh</strong> v. Pancham <strong class="bg-light">singh</strong>, AIR 1939 All 403 (FB), to the effect. meaning of Section 29. A Division Bench of this Court consisting of Teja...
                      </p>

                    <a href="#/" class="popup-open search-link mr-3">
                      <small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small>
                    </a>
                    <a href="#/" class="popup-open judge-link mr-3">
                      <small><i class="fas fa-user-tie"></i> Judges</small>
                    </a>

                  </div>

                  <div class="card-footer pb-4 bg-dark d-none">

                  </div>
                </div> <!-- Card for a Post/Artile -->
              </div>

              <div class="col-md-12 mb-4">
                <div class="post card h-100 p-0 border-0 bg-transparent">
                  <div class="card-body p-0">

                    <a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary">
                      <u>Koshalya Rani Gopal Singh V. Gopal Singh Jhanda Singh</u>
                      <img src="{{asset('public/images/referred.svg')}}" class="ml-2" alt="" height="22px">
                    </a>
                      <p class="card-text text-success mb-1">
                         High Court Of Punjab And Haryana | 31-10-1961
                      </p>
                      <p class="mb-1 detailed-text">
                        <b>Judgment : </b>(1.) PURSUANT to a complaint made by Mst. Kaushiya Rani, <strong class="bg-light">Gopal Singh</strong> was committed to the court of. of a previous Full Bench in Durag Pal <strong class="bg-light">Singh</strong> v. Pancham <strong class="bg-light">singh</strong>, AIR 1939 All 403 (FB), to the effect. meaning of Section 29. A Division Bench of this Court consisting of Teja...
                      </p>

                    <a href="#/" class="popup-open search-link mr-3">
                      <small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small>
                    </a>
                    <a href="#/" class="popup-open judge-link mr-3">
                      <small><i class="fas fa-user-tie"></i> Judges</small>
                    </a>

                  </div>

                  <div class="card-footer pb-4 bg-dark d-none">

                  </div>
                </div> <!-- Card for a Post/Artile -->
              </div>

              <div class="col-md-12 mb-4">
                <div class="post card h-100 p-0 border-0 bg-transparent">
                  <div class="card-body p-0">

                    <a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary">
                      <u>Koshalya Rani Gopal Singh V. Gopal Singh Jhanda Singh</u>
                      <img src="{{asset('public/images/warning.svg')}}" class="ml-2" alt="" height="22px">
                    </a>
                      <p class="card-text text-success mb-1">
                         High Court Of Punjab And Haryana | 31-10-1961
                      </p>
                      <p class="mb-1 detailed-text">
                        <b>Judgment : </b>(1.) PURSUANT to a complaint made by Mst. Kaushiya Rani, <strong class="bg-light">Gopal Singh</strong> was committed to the court of. of a previous Full Bench in Durag Pal <strong class="bg-light">Singh</strong> v. Pancham <strong class="bg-light">singh</strong>, AIR 1939 All 403 (FB), to the effect. meaning of Section 29. A Division Bench of this Court consisting of Teja...
                      </p>

                    <a href="#/" class="popup-open search-link mr-3">
                      <small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small>
                    </a>
                    <a href="#/" class="popup-open judge-link mr-3">
                      <small><i class="fas fa-user-tie"></i> Judges</small>
                    </a>

                  </div>

                  <div class="card-footer pb-4 bg-dark d-none">

                  </div>
                </div> <!-- Card for a Post/Artile -->
              </div>

              <div class="col-md-12 mb-4">
                <div class="post card h-100 p-0 border-0 bg-transparent">
                  <div class="card-body p-0">

                    <a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary">
                      <u>Koshalya Rani Gopal Singh V. Gopal Singh Jhanda Singh</u>
                      <img src="{{asset('public/images/cited.svg')}}" class="ml-2" alt="" height="22px">
                    </a>
                      <p class="card-text text-success mb-1 ">
                         High Court Of Punjab And Haryana | 31-10-1961
                      </p>
                      <p class="mb-1 detailed-text">
                        <b>Judgment : </b>(1.) PURSUANT to a complaint made by Mst. Kaushiya Rani, <strong class="bg-light">Gopal Singh</strong> was committed to the court of. of a previous Full Bench in Durag Pal <strong class="bg-light">Singh</strong> v. Pancham <strong class="bg-light">singh</strong>, AIR 1939 All 403 (FB), to the effect. meaning of Section 29. A Division Bench of this Court consisting of Teja...
                      </p>

                    <a href="#/" class="popup-open search-link mr-3">
                      <small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small>
                    </a>
                    <a href="#/" class="popup-open judge-link mr-3">
                      <small><i class="fas fa-user-tie"></i> Judges</small>
                    </a>

                  </div>

                  <div class="card-footer pb-4 bg-dark d-none">

                  </div>
                </div> <!-- Card for a Post/Artile -->
              </div>

              <div class="col-md-12">
                <div class="post card h-100 p-0 border-0 bg-transparent">
                  <div class="card-body p-0">

                    <a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary">
                      <u>Koshalya Rani Gopal Singh V. Gopal Singh Jhanda Singh</u></a>
                      <p class="card-text text-success mb-1">
                         High Court Of Punjab And Haryana | 31-10-1961
                      </p>
                  <p class="mb-1 detailed-text"><b>Judgment : </b>(1.) PURSUANT to a complaint made by Mst. Kaushiya Rani, <strong>Gopal Singh</strong> was committed to the court of. of a previous Full Bench in Durag Pal <strong>Singh</strong> v. Pancham <strong>singh</strong>, AIR 1939 All 403 (FB), to the effect. meaning of Section 29. A Division Bench of this Court consisting of Teja <strong>Singh</strong> J. and Bhandari J. (as. he then was) in Harbans <strong>Singh</strong> v. Karam Chand, (1949) 51 Pun LR 50 : (AIR 1949 EP 299) had to decide.<br></p>

                    <a href="#/" class="popup-open search-link mr-3">
                      <small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small>
                    </a>
                    <a href="#/" class="popup-open judge-link mr-3">
                      <small><i class="fas fa-user-tie"></i> Judges</small>
                    </a>

                  </div>

                  <div class="card-footer pb-4 bg-dark d-none">

                  </div>
                </div> <!-- Card for a Post/Artile -->
              </div>

            </div> <!-- inner nested row -->

            <nav class="mt-4" aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <small><i class="fas fa-chevron-left"></i></small>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">17</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <small><i class="fas fa-chevron-right"></i></small>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

        </div> <!-- END Posts Wrapper -->



        <aside class="col-lg-3 order-lg-1 bg-white filter-sidebar">
          <section class="widget rounded-lg h-100 px-4">
            <div class="d-flex align-items-center">
              <h2 class="widget-title mb-0 text-uppercase">
                <i class="fas fa-filter mr-1"></i> Search Filter</h2>
              <a href="#" class="ml-auto"><i class="fa fa-undo f-12" aria-hidden="true"></i> Clear</a>
            </div>

            <hr>

              <div class="filter-within-search d-flex align-items-center bg-light2 px-3 mb-3 py-1">
                <a href="#0" class="btn btn-search-toggle btn-icon color--text">
                  <i class="fas fa-search"></i>
                </a>
                <input class="form-control border-0 p-0 bg-transparent h-auto py-2 px-2" type="text" placeholder="Filter Within Result" >
                <button type="button" class="btn btn-sm btn-link h-auto p-0">
                  <i class="lni-cross-circle"></i>
                </button>
              </div>
              <div class="form-group mb-0">
            <label class="mb-2 text-muted d-flex align-items-center" data-toggle="collapse" data-target="#discipline">
              <div class="arrow-triangle mr-2"></div> Discipline
            </label>
            <ul class="filter-list mb-0 collapse show list-unstyled" id="discipline">
              <li class="mb-1 pl-2">
                <div class="custom-checkbox">
                  <label class="f-14 font-weight-normal d-flex">
                    <input class="d-none" type="checkbox" name="maincourt" value="" checked="">
                    <span class="">Supreme Court </span>
                    <small class="ml-auto text-primary font-weight-bold">1,254</small>
                  </label>
                </div>
              </li>
              <li class="mb-1 pl-2">
                <div class="custom-checkbox">
                  <label class="f-14 font-weight-normal d-flex">
                    <input class="d-none" type="checkbox" name="maincourt" value="">
                    <span class="">High Court </span>
                    <small class="ml-auto text-primary font-weight-bold">14,716</small>
                  </label>
                </div>
              </li>
              <li class="mb-1 pl-2">
                <div class="custom-checkbox">
                  <label class="f-14 font-weight-normal d-flex">
                    <input class="d-none" type="checkbox" name="maincourt" value="">
                    <span class="">Tribunal </span>
                    <small class="ml-auto text-primary font-weight-bold">1,341</small>
                  </label>
                </div>
              </li>
            </ul>
          </div>

          <div class="form-group mb-0">
        <label class="mb-2 text-muted d-flex align-items-center collapsed" data-toggle="collapse" data-target="#by-bench">
          <div class="arrow-triangle mr-2"></div> By Bench
        </label>
        <ul class="filter-list  mb-0 collapse list-unstyled" id="by-bench">
          <li class="mb-1 pl-2">
            <div class="custom-checkbox">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="checkbox" name="benchfilter" value="" checked="">
                <span class="">1</span>
                <small class="ml-auto text-primary font-weight-bold">1,254</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-checkbox">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="checkbox" name="benchfilter" value="">
                <span class="">2</span>
                <small class="ml-auto text-primary font-weight-bold">14,716</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-checkbox">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="checkbox" name="benchfilter" value="">
                <span class="">3</span>
                <small class="ml-auto text-primary font-weight-bold">1,341</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-checkbox">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="checkbox" name="benchfilter" value="">
                <span class="">4</span>
                <small class="ml-auto text-primary font-weight-bold">1,254</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-checkbox">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="checkbox" name="benchfilter" value="">
                <span class="">5</span>
                <small class="ml-auto text-primary font-weight-bold">14,716</small>
              </label>
            </div>
          </li>
          <li class="text-center pt-2">
            <a href="#" class="btn btn-sm btn-light btn-block more-btn py-1">More by bench <i class="fas fa-chevron-down"></i></a>
          </li>
        </ul>
      </div>

      <div class="form-group mb-0">
        <label class="mb-2 text-muted d-flex align-items-center collapsed" data-toggle="collapse" data-target="#disposition">
          <div class="arrow-triangle mr-2"></div> Disposition
        </label>
        <ul class="filter-list mb-0 collapse list-unstyled" id="disposition">
          <li class="mb-1 pl-2">
            <div class="custom-radio">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="radio" name="disposition" value="" checked="">
                <span class="">Allowed</span>
                <small class="ml-auto text-primary font-weight-bold">1,254</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-radio">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="radio" name="disposition" value="">
                <span class="">Disallowed</span>
                <small class="ml-auto text-primary font-weight-bold">14,716</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-radio">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="radio" name="disposition" value="">
                <span class="">Other</span>
                <small class="ml-auto text-primary font-weight-bold">1,341</small>
              </label>
            </div>
          </li>
          <li class="mb-1 pl-2">
            <div class="custom-radio">
              <label class="f-14 font-weight-normal d-flex">
                <input class="d-none" type="radio" name="disposition" value="">
                <span class="">Remit</span>
                <small class="ml-auto text-primary font-weight-bold">1,341</small>
              </label>
            </div>
          </li>
        </ul>
      </div>

          <div class="form-group mb-0">
        <label class="mb-2 text-muted d-flex align-items-center collapsed" data-toggle="collapse" data-target="#by-year">
          <div class="arrow-triangle mr-2"></div> Date Range
        </label>
        <ul class="filter-list  mb-0 collapse list-unstyled" id="by-year">
          <li class="mb-1 pl-2">
            <div class="form-group mb-0 date-range">
              <div class="d-flex align-items-center">
                <input type="text" name="daterange" class="form-control form-control-sm mr-1" id="" placeholder="year" value="01/01/2018 - 01/15/2018">
                <button type="button" class="btn btn-primary btn-sm  py-1 px-3 ml-1 align-self-stretch">
                  <i class="fas fa-search"></i>
                </button>
              </div>

            </div>
          </li>
        </ul>
      </div>

      <hr>

          <div class="filter-graph mt-4">
            <img src="{{asset('public/images/graph.png')}}" alt="" class="img-fluid">
          </div>

          </section> <!-- Widget Section -->


        </aside> <!-- END Sidebar -->

      </div> <!-- Nested row -->

    </section> <!-- END Section Posts -->
@endsection