@extends('layouts.noteslayout')
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
                                              <div class="value">{{$notecount}}</div>
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
                <div class="card border-0 shadow p-0" >
                  <div class="card-body p-4" >
                    <div class="row" style="margin:auto; padding:0px; border:0px solid #006633; padding:20px 0px 40px 0px;">
                      <div class="topnav" id="myTopnav"> 
                      <a href="javascript:void(0);"  data-toggle="modal" data-target="#add-notes" class="b-r active" id="newNoteBtn"> + New Notes</a> 
                      <a href="javascript:void(0);" class="b-r" id="noteBtn">All Notes</a> 
                      <a href="javascript:void(0);" class="b-r" id="notebookBtn">Notebook</a> 
                      <a href="javascript:void(0);" class="b-r" id="shareBtn">Share with Me</a> 
                      <a href="javascript:void(0);" class="b-r" id="trashBtn">Trash</a> 
                      <a href="javascript:void(0);" class="icon"> <i class="fa fa-bars"></i> </a> </div>
                    </div>
                    <div class="row" style="margin:auto; padding:0px;" id="row1">
                      <div class="col-md-4" style="border:0px solid #CC6600;" id="noteTab">
                        <h4 class="h4 card-title d-block mb-1 font-weight-bold" >My Notes</h4>
                        <hr class="mb-3">
                        <div class="row mb-2">
                        @foreach($data as $value)
                          <div class="col-sm-12 b-r b-r-s b-b" style="padding-bottom:20px; padding-top:10px;">
                          
                            <a href="#"><h4 onclick="getNoteDetail({{$value->id}});">{{$value->title}}</a></h4>
                            <p style="font-size:12px;">{!!$value->description!!}</p>
                            <div class="label" style="font-size:12px;">{{$value->date_created}}</div>
                              <i title="Share" data-toggle="modal" data-target="#shareform" onclick="generateURL({{$value->id}});" style="float:right; font-size: 12px; cursor: pointer;" class="fas fa-share"></i>
                             <i title="Move to trash" data-toggle="modal" data-target="#deletemodal1" onclick="getNoteId({{$value->id}});" style="float:right; font-size: 12px; margin-right: 10px; cursor: pointer; " class="fas fa-trash"></i>
                          </div>
                          @endforeach
                        </div>
                        {{$data->links()}}
                      </div>
                      <!-- left site -->
                        <div class="col-md-4" style="border:0px solid #CC6600; display:none;" id="trashTab">
                        <h4 class="h4 card-title d-block mb-1 font-weight-bold" >Trash</h4>
                        <hr class="mb-3">
                        <div class="row mb-2">
                       @foreach($trashdata as $value)
                       <div class="col-sm-12 b-r b-r-s b-b" style="padding-bottom:20px; padding-top:20px;" >
                            <a href="#"><h4 onclick="getNoteDetail({{$value->id}});">{{$value->title}}</a></h4>
                            <p style="font-size:12px;">{!!$value->description!!}</p>
                            <div class="label" style="font-size:12px;">{{$value->date_created}}</div>
                            <i data-toggle="modal" data-target="#trash" onclick="getTrashNoteId({{$value->id}});" style="float: right; cursor: pointer;" title="Undo trash" class="fas fa-undo"></i>
                       </div>
                       @endforeach
                        </div>
                      {{$trashdata->links()}}
                      </div>
                      
                    <div class="col-md-4" style="border:0px solid #CC6600; display:none;" id="shareTab">
                        <h4 class="h4 card-title d-block mb-1 font-weight-bold" >Shared with me</h4>
                        <hr class="mb-3">
                        <div class="row mb-2">
                       
                       <div class="col-sm-12 b-r b-r-s b-b" style="padding-bottom:20px; padding-top:20px;">
                            <h4></h4>
                            <p style="font-size:12px;"></p>
                            <div class="label" style="font-size:12px;"></div>
                          </div>
                          
                        </div>
                      </div>
                      
                    <div class="col-md-4" style="border:0px solid #CC6600; display:none;" id="notebookTab">

                        <h4 class="h4 card-title d-block mb-1 font-weight-bold" >Notebook</h4>
                        <hr class="mb-3">
                        <div class="row mb-2" >
               
                       <div class="col-sm-12 b-r b-r-s b-b" style="padding-bottom:20px; padding-top:20px;">
                            <h4></h4>
                            <p style="font-size:12px;"></p>
                            <div class="label" style="font-size:12px;"></div>
                          </div>
                        </div>
                      </div>
                  
                  <div class="col-md-8" style="border:0px solid #CC6600;" id="result">
                   
                  </div>

                 <!--  <div class="col-md-8" style="border:0px solid #CC6600;" id="result1">
                  </div> -->

                  </div>
              
                  <div class="row" style="margin:auto; padding:0px; display:none;" id="row2">
           
                 <div class="col-md-10">
                      <h4 class="h4 card-title d-block mb-1 font-weight-bold">My Notebook</h4>
                      </div>
                       <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".report-problem-form" style="float:right; padding-left: 5px; padding-right: 5px;">
                        New Notebook
                        </button>
                      </div>
                      
                      <input type="hidden" id="notebookId">
                      <hr class="mb-3">

                      <!--Main Design Starts-->

                     <!--  <div class="table-responsive">
                        <table id="datatable" class="table table-striped f-14">
                          <thead class="bg-dark text-white">
                            <tr>
                              <th>S/N</th>
                              <th>Title</th>
                              <th>Date</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                         @foreach($notebookdata as $key => $value)
                            <tr>
                            <td>{{$key++}}</td>
                            <td>
                              <a onclick="showNotebookNote({{$value->id}});" href="javascript:void(0);">
                                {{$value->name}}
                              </a>
                            </td>
                              <td>{{$value->date_created}}</td>
                              <td>
                                <a href="#/" data-toggle="modal" data-target="#viewnotes"><i class="fas fa-search"></i></a>
                                <a class="ml-2" href="#/"><i class="fas fa-print"></i></a>
                                <a title="Delete NotebooK" onclick="getnotebookid({{$value->id}});" data-toggle="modal" data-target="#deletenotebook" class="text-danger ml-2" href="#/"><i class="far fa-trash-alt"></i></a>
                                <a title="Add Note" data-toggle="modal" data-target="#add-notes" onclick="getNoteBookId({{$value->id}});" class="ml-2" href="#/"><i class="fas fa-plus"></i></a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div> -->

                      <!--Main Design Ends-->


                      <!--My Custom Design Starts-->

                      <table style="border-style:none;" class="table">
                       <tr>
                        <!-- <th>#</th> -->
                        <th>Notebook Name</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                      </tr>
                      @foreach($notebookdata as $key => $value)
                      <tr>
                        <!-- <td>{{++$key}}</td> -->
                        <td onclick="getNoteBookData({{$value->id}});"><i data-toggle="collapse" data-target="#demo{{$key}}" style="cursor: pointer;" class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;
                        <i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;&nbsp;
                        {{$value->name}}
                         <div style="border-style: none;" id="demo{{$key}}" class="collapse table mydata{{$value->id}}">

                          
                        </div></td>
                        <td>{{$value->date_created}}</td>
                        <td><i style="cursor: pointer;" title="Add Note" data-toggle="modal" data-target="#add-notes" onclick="getNoteBookId({{$value->id}});" class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;
                          <i style="cursor: pointer;" title="Delete NotebooK" onclick="getnotebookid({{$value->id}});" data-toggle="modal" data-target="#deletenotebook" class="fas fa-trash"></i></td>
                      </tr>
                      @endforeach
                      </table>
                      {{$notebookdata->links()}}

                      <!--My Custom Design Ends-->
 
                    </div>
                </div>
              </section>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- END Section Posts -->
      <!-- Modal -->
<div class="modal fade report-problem-form" id="report-problem-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">New Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form method="POST" action="{{route('add-notebook')}}" name="notebookform">
          @csrf()
            <div class="prblem-area form-group ">

              <label for="">Select Your Notebook</label>
              <div class="form-group">
                <select class="selectpicker-modal form-control" name="parent_id" title="Select Problem Area">
                  <option value="0" selected>Select Parent Notebook</option>
                  @foreach($notebookdata as $key => $value)
                  <option value="{{$value->id}}">{{$value->name}}</option>
                  @endforeach
                </select>
              </div>

            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" rows="3" placeholder="Please enter name">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Please enter information here"></textarea>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
    
    
<div class="popup" style="display: none;">
  <h4>Share Notes</h4>
  <p>Sharethe notes around a common topic. They can be private or shared.</p> 
  <form method="post">
    <input type="text" name="unique_code" id="unique_code">

    <input type="email" name="emailId" id="emailId">

    <button type="reset" onclick="closePopup();">Cancel</button>
    <button type="button" onclick="shareNote();">Continue</button>

  </form> 
</div>


<!-- Delete Note Modal -->
  <div class="modal fade" id="deletemodal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="width:63%; margin:auto; border-radius:0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="deletenote">
          <div style="display: none; margin:auto; font-size: 14px; color:green; margin-left:50px;" id="message1"></div>
          <div class="overlay">
          <h5 id="loader_message2" style="display:none; text-align: center;">Moving to Trash..</h5>       
          <img id="loading_image2" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p>Are you sure you want to move this note to trash?</p>
        </div>
        <div style="border-style:none;" class="modal-footer">
          <button style="padding-left:10px; padding-right: 10px; padding-top: 3px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" class="btn btn-success btn-sm pull-right" onclick="removemessage();" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <button style="padding:5px; font-size: 15px; border-radius: 0px;" type="button" onclick="deletenote();" class="btn btn-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>

        </div>
      </div>
      
    </div>
  </div>



<!--Trash undo Modal-->

<!-- Trash Note Modal -->
  <div class="modal fade" id="trash" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="width:63%; margin:auto; border-radius:0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="trashnote">
          <div style="display: none; margin:auto; font-size: 14px; color:green; margin-left:50px;" id="message1"></div>
          <div class="overlay">
          <h5 id="loader_message2" style="display:none; text-align: center;">Moving to Notes..</h5>       
          <img id="loading_image2" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p>Are you sure you want to Undo trash this 
          Note?</p>
        </div>
        <div style="border-style:none;" class="modal-footer">
          <button style="padding-left:10px; padding-right: 10px; padding-top: 3px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" class="btn btn-success btn-sm pull-right" onclick="removemessage();" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <button style="padding:5px; font-size: 15px; border-radius: 0px;" type="button" onclick="undotrash();" class="btn btn-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>

        </div>
      </div>
    </div>
  </div>




<!--Add Notes Modal -->

<div class="modal fade add-notes" id="add-notes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Note in Notebook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form method="POST" action="{{route('addingnote')}}" name="noteform">
          @csrf()
            <div class="prblem-area form-group ">
              <input type="hidden" id="notebookid" name="notebookid">
              <label for="">Select Notes Type</label>
              <div class="">
                <select name="fact" id="fact" class="selectpicker-modal form-control" multiple data-selected-text-format="count > 4" title="Select Problem Area">
                  <option>Reasoning</option>
                  <option>Facts</option>
                  <option>Case Cited</option>
                  <option>Decision</option>
                  <option>Issue</option>
                </select>
              </div>

            </div>
            <div class="form-group">
                <label for="note-title">Title</label>
                <input type="text" class="form-control" value"" name="title" id="title" rows="3" placeholder="notes title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" value"" name="description" id="description" rows="3" placeholder="Please enter information here"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Add Note</button>
      </div>
    </div>
  </div>
</div>
  </form>



  <div class="modal fade" id="deletenotebook" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="width:63%; margin:auto; border-radius: 0px;" class="modal-content">
        <div class="modal-body">
          <input type="hidden" id="notebookid">
           <div style="display: none; margin:auto; font-size: 16px; color:green; margin-left:50px;" id="message3"></div>
          <div class="overlay">
          <h5 id="loader_message3" style="display:none; text-align: center;">Deleting NoteBook Please wait....</h5><br>       
          <img id="loading_image3" style="display:none;" height="60" width="60" src="{{asset('public/images/loader.gif')}}">
        </div>
          <p>Are you sure you want to delete this notebook?</p>
        </div>
        <div style="border-style:none;" class="modal-footer">
          <button style="padding-left:10px; padding-right: 10px; padding-top: 3px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" onclick="resetform();" class="btn btn-success btn-sm" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <button style="padding-left:10px; padding-right: 10px; padding-top: 3px; font-size: 15px; border-radius: 0px; color:#fff;" type="button" class="btn btn-danger btn-sm" onclick="deletenotebook();"><i class="fa fa-check" aria-hidden="true"></i></button>

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

@endsection