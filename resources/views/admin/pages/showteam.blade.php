@extends('admin.layouts.layout')
@section('content')
 <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Add Team</h2>
                    </div>
                    <div class="card-body">

                        <div class="col-md-10">T
                            @if(session('success'))
                            <div id="messagediv" class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                      <form method="Post"  action="{{route('addteam')}}" enctype='multipart/form-data' name="teamform">
                        @csrf
                        <div class="form-group">
                          <label for="category">Category:</label>
                            <select class="form-control" type="text" name="category" id="category">
                                <option value="1">Team</option>
                                <option value="2">National Advisory</option>
                                <option value="3">International Advisory</option>
                                <option value="4">Consultant</option>
                                <option value="5">Campus</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="subcategory">Subcategory:</label>
                                <select class="form-control" type="text" name="subcategory" id="subcategory">
                                <option value="1">Technology Team</option>  
                                <option value="2">Management Team</option>  
                                <option value="3">R&D Team</option>
                                <option value="4">Sales and Marketing</option>  
                                <option value="5">Human Resources</option>  
                                <option value="6">Office Helpline</option>      
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" type="text"  name="name" id="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                          <label for="designation">Designation:</label>
                            <input class="form-control" type="text"  name="designation" id="designation" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <img style="height:20px; width:30px;" src="#" id="profileimage1" alt="your image"></br>
                         <label for="profileimage">Profile Image:</label>
                         
                        <input class="form-control" onchange="readURL(this);" type="file" name="profileimage" id="profileimage">
                        </div>

                        <div class="form-group">
                        <label for="profileurl">Profile URL:</label>
                            <input class="form-control" type="text" name="profileurl" id="profileurl" placeholder="Enter Profileurl">
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
