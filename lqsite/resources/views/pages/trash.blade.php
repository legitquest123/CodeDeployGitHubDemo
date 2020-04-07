@extends('layouts.layout')
@section('content')
<!-- <div class="overlay">
      <img id="loading_image" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
    </div> -->
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
                              <th>Date Created</th>
                              
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                         @foreach($tdata as $key=> $value)
                            <tr>
                              <td>
                              {{++$key}}
                              </td>
                              <td>
                                <a onclick="getnotedetail({{$value->id}});" data-toggle="modal" data-target="#notedetail"  href="#">{{$value->title}}</a>
                              </td>
                              <td>
                                {!!$value->description!!}
                              </td>

                              <td>
                               {{$value->date_created}}
                              </td>
                              <td>
                                <a title="Undo Trash" class="ml-2" data-toggle="modal"  data-target="#trashmodal" href="#" onclick="getTrashNoteId({{$value->id}});"><i class="fas fa-undo"></i></a>
                                <a title="Delete note permanently" class="ml-2" data-toggle="modal" data-target="#deletemodal1" href="#" onclick="getId({{$value->id}});"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>


<!-- Trash Note Modal -->
  <div class="modal fade" id="trashmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="width:63%; margin:auto; border-radius:0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="trashnote">
          <div style="display: none; margin:auto; font-size: 14px; color:green; margin-left:50px;" id="message"></div>
          <div class="overlay">
          <h5 id="loader_message2" style="display:none; text-align: center;">Moving Notes..</h5>       
          <img id="loading_image2" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p>Are you sure you want to Undo this 
          Note?</p>
        </div>
        <div style="border-style:none;" class="modal-footer">
          <button style="padding-left:10px; padding-right: 10px; padding-top: 3px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" class="btn btn-success btn-sm pull-right" onclick="removemessage();" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <button style="padding:5px; font-size: 15px; border-radius: 0px;" type="button" onclick="undotrash();" class="btn btn-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>

        </div>
      </div>
    </div>
  </div>


<!-- Delete Note Modal -->
  <div class="modal fade" id="deletemodal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="width:63%; margin:auto; border-radius:0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="trashnoteid">
          <div style="display: none; margin:auto; font-size: 14px; color:green; margin-left:50px;" id="message4"></div>
          <div class="overlay">
          <h5 id="loader_message4" style="display:none; text-align: center;">Deleting Notes..</h5>       
          <img id="loading_image4" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p>Are you sure you want to Delete this 
          Note Permanently?</p>
        </div>
        <div style="border-style:none;" class="modal-footer">
          <button style="padding-left:10px; padding-right: 10px; padding-top: 5px; padding-bottom: 5px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" class="btn btn-success btn-sm pull-right" onclick="removemessage();" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <button style="padding-left:8px; padding-right: 8px; padding-top: 5px; padding-bottom: 5px; font-size: 15px; border-radius: 0px;" type="button" onclick="deletetrashnote();" class="btn btn-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>

        </div>
      </div>
    </div>
  </div>



<!-- Show Notes Detail Modal -->
  <div class="modal fade" id="notedetail" role="dialog">
    <div class="modal-dialog">
      <div style="border-radius:0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="notedetail123">
          <h3 style="text-align: left; text-decoration: underline;" id="notetitle"></h3>
          <p style="text-align: left; font-size: 13px; text-align: justify;" id="notedescription"></p>
          Date Created: <p style="text-align: left;" id="notedate"></p>
        </div>
        <div style="border-style:none;" class="modal-footer">
        </div>
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