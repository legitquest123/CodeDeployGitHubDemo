@extends('admin.layouts.login-layout')

@section('content')
 <div class="col-md-5 offset-md-2">
<div style="margin-top: 40px;" class="card card-default">
                    <div style="background-color: #005aaa;" class="card-header card-header-border-bottom">
                      <center><h2 style="color:white;">Admin Login</h2></center>
                    <!--   <img style="height:60px; margin:auto;" src="{{asset('public/images/logo-dark.png')}}"> -->
                    </div>
                    <div class="card-body">
                           @if(session('error'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('error')}}
                            </div>
                            @endif
                             @if(session('error1'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('error1')}}
                            </div>
                            @endif
                              @if(session('errormessage'))
                            <div id="messagediv" class="alert alert-danger">
                                {{session('errormessage')}}
                            </div>
                            @endif
                      <form method="Post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" type="email"  name="email" id="email" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                          <label for="password">Password:</label>
                            <input class="form-control" type="password"  name="password" id="password" placeholder="Enter password">
                        </div>
                        <!-- <div class="form-group">
                        <label for="description">Description:</label>
                            <textarea class="form-control" type="description" name="description" id="description"></textarea>
                        </div> -->
                        <div class="form-footer">
                          <button type="submit" style="background-color: #005aaa; padding: 7px 9px 5px 7px;" class="btn btn-primary btn-default">Take me in!</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection