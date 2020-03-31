@extends('layouts.layout')
@section('content')
<div class="overlay">
      <img id="loading_image" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
    </div>
    <section class="section publish-section section-posts bg-gray  pt-5 pb-5">
      <div class="container-fluid px-md-5">
        <div class="row row-grid justify-content-center">

          <div class="col-lg-12">
             @if(session('success'))
                              <div id="messagediv" class="alert alert-success">
                                  {{session('success')}}
                              </div>
                              @endif
                @if(session('error'))
              <div id="messagediv" class="alert alert-danger">
                  {{session('error')}}
              </div>
              @endif

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
                <section>
                  <div class="card border-0 shadow p-0">
                    <div class="card-body p-4">
                      <h4 class="h4 card-title d-block mb-1 font-weight-bold">Trash</h4>
                      <button type="button" onclick="trashNotes();">Empty Trash</button>
                      <hr class="mb-3">
                      <div class="table-responsive">
                        <table id="datatable" class="table table-striped f-14">
                          <thead class="bg-dark text-white">
                            <tr>
                              <th>S/N</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                         @foreach($data as $key=> $value)
                            <tr>
                              <td>
                              {{++$key}}
                              </td>
                              <td>
                                <a href="#">{{$value->title}}</a>
                              </td>
                              <td>
                                {{$value->description}}
                              </td>

                              <td>
                               {{$value->date_created}}
                              </td>
                              <td>
                                <a class="ml-2" href="#" onclick="moveNote();"><i class="fas fa-print"></i></a>
                              </td>
                            </tr>
                            @endforeach
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
    </section> <!-- END Section Posts -->

 
@endsection