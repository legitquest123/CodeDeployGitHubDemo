@extends('admin.layouts.layout')

@section('content')

<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Edit Site Setting</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-10">
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
                      <form method="Post" action="{{route('updatesetting',$data[0]->id)}}" name="settingform" enctype='multipart/form-data'>
                        @csrf
                       
                        <div class="form-group">
                            <label for="copyright">Copyright Content: </label> <span style="color:red;">*</span>
                            <input class="form-control" type="text" value="{{$data[0]->copyright}}" name="copyright" id="copyright" placeholder="Enter copyright">
                        </div>

                        <div class="form-group">
                        	 <img src="{{asset('public/upload')}}/{{$data[0]->frontendlogo}}" style="height:20px; width:30px;" src="#" id="frontendlogo" alt="your image"></br>
                        	 
                          <label for="frontendlogo">Frontend Logo: </label>
                            <input class="form-control" onchange="readURL2(this)" type="file"  name="frontendlogo" id="frontendlogo">

                            <input type="hidden" name="oldimage1" id="oldimage1" value="{{$data[0]->frontendlogo}}">
                            <span class="err"></span>
                        </div>
                         <div class="form-group">
                         	 <img src="{{asset('public/upload')}}/{{$data[0]->backendlogo}}" style="height:20px; width:30px;" src="#" id="backendlogo" alt="your image"></br>

                          <label for="backendlogo">Backend Logo: </label> 
                            <input class="form-control" onchange="readURL3(this)" type="file"  name="backendlogo" id="backendlogo">

                            <input type="hidden" name="oldimage2" id="oldimage2" value="{{$data[0]->backendlogo}}">
                            <span class="err"></span>
                        </div>
                        <div class="form-group">
                        <label for="socialmedia">Social Media Icons:</label>
                            <textarea class="form-control" type="socialmedia" name="socialmedia" id="socialmedia">{{$data[0]->socialmedia}}</textarea>
                        </div>
                         <div class="form-group">
                            <label for="footertabs">Footer Tabs:</label>
                        <textarea class="form-control" name="footertabs" id="footertabs">{{$data[0]->footertabs}}</textarea> 
                        </div>

                 <div class="form-footer pt-4 pt-5 mt-4 border-top">
                  <button type="submit" class="btn btn-primary btn-default">Update Settings</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection