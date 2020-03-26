@extends('admin.layouts.layout')
@section('content')
 <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Add Career</h2>
                    </div>
                    <div class="card-body">

                        <div class="col-md-10">
                          @if(session('success'))
                          <div id="messagediv" class="alert alert-success">
                            {{session('success')}}
                          </div>
                          @endif

                          @if(session('error'))
                          <div id="errormessage" class="alert alert-danger">
                            {{session('error')}}
                          </div>
                          @endif
                      <form method="Post"  action="{{route('addcareer')}}" enctype='multipart/form-data' name="careerform">
                        @csrf
                        <div class="form-group">
                          <label for="category">Category:</label>
                            <select class="form-control" type="text" name="category" id="category">
                              <option value="1">R & D Associate Manager</option>
                              <option value="2">Digital Marketing/Manager</option>
                              <option value="3">Sales Associate/Manager</option>
                              <option value="4">Operations Associate/Manager</option>
                              <option value="5">Customer Success Associate/Manager</option>
                              <option value="6">Quality Assurance</option>
                              <option value="7">Full Stack Developer</option>
                              <option value="8">Front End Developer</option>
                            </select>
                        </div>
                        <div class="form-group">
                         <label for="category">Type:</label>
                            <select class="form-control" type="text" name="type" id="type">
                              <option value="Full Time">Full Time</option>
                              <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                        <div class="form-group">
                         <label for="category">Select Career Type:</label>
                            <select class="form-control" type="text" name="careertype" id="careertype">
                              <option value="JOB">JOB</option>
                              <option value="CAP">CAP</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="heading">Heading:</label> <span style="color:red;">*</span>
                            <input class="form-control" type="text"  name="heading" id="heading" placeholder="Enter Heading">
                        </div>

                        <div class="form-group">
                         <label for="description">Description:</label>
                       <textarea height="40" id="description" name="description"></textarea>
                        </div>
                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                          <button type="submit" class="btn btn-primary btn-default">Submit</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
                  @endsection
              