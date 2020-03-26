@extends('layouts.layout')
@section('content')

  
    <section class="section publish-section section-posts bg-gray  pt-5 pb-5">
      <div class="container-fluid px-md-5">
        <div class="row row-grid justify-content-center">

          <div class="col-lg-12">

            <div class="row">

              <aside class="sidebar col-lg-3">
                <section class="widget rounded-lg shadow-sm user-block mb-4 text-center position-relative">
                    <figure class="user-thumb  mb-0">
                      <img src="./images/team/ambikaprasad.jpg" alt="" class="rounded-circle w-100">
                      <figcaption class="position-absolute d-flex align-items-center px-1">
                        <span class="dot-separator bg-success mr-1" ></span>
                        <span class="text-dark f-12">Online</span>
                      </figcaption>
                    </figure>
                </section>

                <section class="widget widget-subscribe  rounded-lg shadow-sm px-4 pb-4 pt-0">
                  <div class="up-contents">
                              <div class="">
                                  <div class="row mb-2 text-center">
                                      <div class="col-sm-6 b-r b-b">
                                          <div class="el-tablo centered py-3">
                                            <a href="./notes.html">
                                              <div class="value">25</div>
                                              <div class="label">Notes</div>
                                            </a>
                                          </div>
                                      </div>
                                      <div class="col-sm-6 b-b">
                                          <div class="el-tablo centered  py-3">
                                            <a href="./bookmark.html">
                                              <div class="value">31</div>
                                              <div class="label">Bookmarks</div>
                                            </a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="profile-links">
                                    <ul class="list-unstyled mb-0">
                                      <li><a href="./profile.html"><i class="lni-user mr-2"></i>Edit Profile</a> </li>
                                      <li><a href="#"><i class="lni-lock mr-2"></i> Change password</a></li>
                                      <li><a href="./bookmark.html"><i class="lni-bookmark mr-2"></i> Bookmarks</a></li>
                                      <li><a href="./notes.html"><i class="lni-pencil-alt mr-2"></i> Notes</a></li>
                                    </ul>
                                  </div>


                              </div>
                          </div>
                </section>

              </aside> <!-- END Sidebar -->

              <div class="col-lg-9 mb-5 mb-lg-0">


                  <div class="card card-side-to-side mb-4 p-0 border-0 shadow">
                    <div class="row no-gutters">
                    <div class="col-md-8 col-lg-8">
                      <div class="card-body p-4">

                        <a href="#" class="h3 card-title d-block mb-2 font-weight-bold">Ambika Prasad Jena</a>
                        <hr>
                        <div class="d-flex">
                          <p class="card-text mb-0">
                            <small class="text-muted mr-3"><i class="lni-map-marker"></i> Gurgaon, India</small>
                            <small class="text-muted mr-3"><i class="lni-phone-handset"></i> +91 98675434</small>
                            <small class="text-muted "><i class="lni-envelope"></i> ambika-prasad@gmail.com</small>
                          </p>

                        </div>

                      </div>


                    </div>
                    <div class="col-md-4 col-lg-4">
                      <div class="p-4 plan-block">


                        <div class="d-flex">

                          <div class="flex-fill">
                            <h5 class="mb-0 text-primary">Individual</h5>
                            <h2 class="mb-0"><small>Rs.</small>9,000</h2>
                            <small>Renew Plan Date: <strong class="text-dark">22 Jan 2021</strong> </small>
                          </div>
                        </div>

                      </div>
                    </div>


                  </div> <!-- Right Side Card -->
                </div>

                <section>
                  <div class="card border-0 shadow p-0">
                    <div class="card-body p-4">
                      <a href="#" class="h4 card-title d-block mb-4 font-weight-bold">Recent Search History</a>
                      <div class="table-responsive">
                        <table class="table table-striped f-14">
                          <thead class="bg-dark text-white">
                            <tr>
                              <th>S/N</th>
                              <th>URL</th>
                              <th width="150">Date</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr role="row" class="odd">
                              <td  class="sorting_1">
                                  1
                              </td>
                              <td >
                                  <a class="text-wrap" href="https://www.legitquest.com/SearchHistory/Index" target="_blank" title="https://www.legitquest.com/SearchHistory/Index">https://www.legitquest.com/SearchHistory/Index?</a>
                              </td>
                              <td>
                                  11-02-2020
                              </td>

                          </tr><tr role="row" class="even">
                              <td  class="sorting_1">
                                  2
                              </td>
                              <td >
                                  <a class="text-wrap" href="https://www.legitquest.com/Home/Home?isOpenLogin=False" target="_blank" title="https://www.legitquest.com/Home/Home?isOpenLogin=False">https://www.legitquest.com/Home/Home?isOpenLogin=False&amp;</a>
                              </td>
                              <td >
                                  11-02-2020
                              </td>

                          </tr><tr role="row" class="odd">
                              <td  class="sorting_1">
                                  3
                              </td>
                              <td >
                                  <a class="text-wrap" href="https://www.legitquest.com/SearchHistory/Index" target="_blank" title="https://www.legitquest.com/SearchHistory/Index">https://www.legitquest.com/SearchHistory/Index?</a>
                              </td>
                              <td >
                                  11-02-2020
                              </td>

                          </tr>
                          <tr role="row" class="even">
                              <td  class="sorting_1">
                                  4
                              </td>
                              <td >
                                  <a class="text-wrap" href="https://www.legitquest.com/Home/GetCaseDetails?searchType=freetext&amp;searchText=no work no pay" target="_blank" title="https://www.legitquest.com/Home/GetCaseDetails?searchType=freetext&amp;searchText=no work no pay">https://www.legitquest.com/Home/GetCaseDetails?searchType=freetext&amp;searchText=no work no pay&amp;</a>
                              </td>
                              <td >
                                  11-02-2020
                              </td>

                              <tr role="row" class="even">
                                  <td  class="sorting_1">
                                      5
                                  </td>
                                  <td >
                                      <a class="text-wrap" href="https://www.legitquest.com/Home/GetCaseDetails?searchType=freetext&amp;searchText=no work no pay" target="_blank" title="https://www.legitquest.com/Home/GetCaseDetails?searchType=freetext&amp;searchText=no work no pay">https://www.legitquest.com/Home/GetCaseDetails?searchType=freetext&amp;searchText=no work no pay&amp;</a>
                                  </td>
                                  <td >
                                      11-02-2020
                                  </td>

                          </tr>
                          </tr>
                        </tbody>
                        </table>
                      </div>
                      <a href="#" class="btn btn-sm btn-light btn-block more-btn ">More search history <i class="fas fa-chevron-down"></i></a>
                    </div>
                  </div>


                </section>


              </div> <!-- END Posts Wrapper -->



            </div> <!-- Nested row -->
          </div>



        </div>
      </div>
    </section> <!-- END Section Posts -->

@endsection