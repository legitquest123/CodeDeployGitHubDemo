@extends('admin.layouts.layout')

@section('content')

<div class="col-md-8">
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <!-- <img src="{{asset('public/images/logo-dark.png')}}"> -->
                      <h2>Change Password</h2>
                    </div>
                    <div class="card-body">
                            @if(session('error1'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('error1')}}
                            </div>
                            @endif
                             @if(session('error2'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('error2')}}
                            </div>
                            @endif
                             @if(session('error3'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('error3')}}
                            </div>
                            @endif
                             @if(session('success'))
                            <div id="messagediv" class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                      <form method="Post" action="{{route('updatepassword')}}" name="changepassword">
                        @csrf
                        <div class="form-group">
                            <label for="oldpassword">Old Password:</label>
                            <input class="form-control" type="text"  name="oldpassword" id="oldpassword" placeholder="Old password">
                        </div>

                        <div class="form-group">
                          <label for="newpassword">New Password:</label>
                            <input class="form-control" type="text"  name="newpassword" id="newpassword" placeholder="New password">
                        </div>
                        <div class="form-group">
                        <label for="confirmpassword">Confirm Password:</label>
                            <input type="text" class="form-control" type="confirmpassword" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
                        </div>
                        <div class="form-footer">
                          <button type="submit" class="btn btn-primary btn-default">Change Password</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
		@endsection

		