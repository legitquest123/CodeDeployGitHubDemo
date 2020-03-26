@extends('admin.layouts.layout')

@section('content')


<div class="col-md-8">
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <!-- <img src="{{asset('public/images/logo-dark.png')}}"> -->
                      <h2>Edit Profile</h2>
                    </div>
                    <div class="card-body">
                            @if(session('error'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('error')}}
                            </div>
                            @endif
                            @if(session('success'))
                            <div id="messagediv" class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                      <form method="Post" name="profileform" action="{{route('updateprofile')}}" enctype='multipart/form-data'>
                        @csrf
                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" value="{{$data->name}}" type="text"  name="name" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" value="{{$data->email}}" readonly type="email"  name="email" id="email" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                          <label for="status">Status:</label>
                            <select class="form-control" name="status" id="status">
                              @foreach($status as $key=> $value)
                                @if($data->status == $key)
                                <option selected value="{{$key}}">{{$value}}</option>
                                @else
                                <option value="{{$key}}">{{$value}}</option>
                                @endif
                              @endforeach
                          </select>
                        </div>
                         <div class="form-group">
                         <img src="{{asset('public/upload')}}/{{$data->profileimage}}" style="height:20px; width:30px;" src="#" id="profileimage1" alt="your image"></br>

                         <label for="pimage">Profile Image:</label>
                            <input class="form-control" onchange="readURL1(this);" type="file" name="profileimage" id="profileimage">
                             <input type="hidden" name="oldimage" id="oldimage" value="{{$data->profileimage}}">
                        </div>
                        <div class="form-footer">
                          <button type="submit" class="btn btn-primary btn-default">Update Profile</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection