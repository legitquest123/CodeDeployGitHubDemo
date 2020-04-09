@extends('layouts.noteslayout')
@section('content')

    <section class="section publish-section section-posts bg-gray  pt-5 pb-5">
      <div class="container-fluid px-md-5">
        <div class="row row-grid justify-content-center">

          <div class="col-lg-12">

            <div class="row">

              <aside class="sidebar col-lg-3">
                <section class="widget rounded-lg shadow-sm user-block mb-4 text-center position-relative">
                  <figure class="user-thumb  mb-0">
                    <img src="{{asset('public/images/team/ambikaprasad.jpg')}}" alt="" class="rounded-circle w-100">
                    <figcaption class="position-absolute d-flex align-items-center px-1">
                      <span class="dot-separator bg-success mr-1"></span>
                      <span class="text-dark f-12">Online</span>
                    </figcaption>
                  </figure>
                </section>

                <section class="widget widget-subscribe  rounded-lg shadow-sm px-4 pb-4 pt-0">
                  <div class="up-contents">
                    <div class="">
                      <div class="row mb-2 text-center">
                        <div class="col-6 b-r b-b">
                          <div class="el-tablo centered py-3">
                            <a href="./notes.html">
                              <div class="value">{{$notecount}}</div>
                              <div class="label">Notes</div>
                            </a>
                          </div>
                        </div>
                        <div class="col-6 b-b">
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
                <section>
                  <div class="card border-0 shadow p-0">
                    <div class="card-body p-4">
                      <h4 class="h4 card-title d-block mb-1 font-weight-bold">My Bookmarks</h4>
                      <hr class="mb-3">
                      <div class="table-responsive">
                        <table id="datatable" class="table table-striped f-14">
                          <thead class="bg-dark text-white">
                            <tr>
                              <th>S/N</th>
                              <th>Party Name</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                1
                              </td>
                              <td>
                                <a href="#">Chandrashekhar Verma Vs. State of M.P.</a>
                              </td>

                              <td class="row-actions text-right">
                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                2
                              </td>
                              <td>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                              </td>

                              <td class="row-actions text-right">
                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                3
                              </td>
                              <td>
                                <a href="#">In lobortis volutpat tortor. In nec blandit nulla, ut pretium sem</a>
                              </td>

                              <td class="row-actions text-right">
                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                4
                              </td>
                              <td>
                                <a href="#">Chandrashekhar Verma Vs. State of M.P.</a>
                              </td>

                              <td class="row-actions text-right">
                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                5
                              </td>
                              <td>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                6
                              </td>
                              <td>
                                <a href="#">In lobortis volutpat tortor. In nec blandit nulla, ut pretium sem</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                7
                              </td>
                              <td>
                                <a href="#">Chandrashekhar Verma Vs. State of M.P.</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                8
                              </td>
                              <td>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                9
                              </td>
                              <td>
                                <a href="#">In lobortis volutpat tortor. In nec blandit nulla, ut pretium sem</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                10
                              </td>
                              <td>
                                <a href="#">Chandrashekhar Verma Vs. State of M.P.</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                11
                              </td>
                              <td>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                              </td>

                              <td>

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                12
                              </td>
                              <td>
                                <a href="#">In lobortis volutpat tortor. In nec blandit nulla, ut pretium sem</a>
                              </td>

                              <td class="row-actions text-right">

                                <a class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>


                </section>


              </div> <!-- END Posts Wrapper -->



            </div> <!-- Nested row -->
          </div>



        </div>
      </div>
    </section>



@endsection