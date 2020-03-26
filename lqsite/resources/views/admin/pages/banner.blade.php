@extends('admin.layouts.layout')

@section('content')
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Add Banner</h2>
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
                      <form method="Post" action="{{route('addbanner')}}" name="bannerform" enctype='multipart/form-data' >
                        @csrf
                       
                        <div class="form-group">
                            <label for="heading">Heading: </label> <span style="color:red;">*</span>
                            <input class="form-control" type="text"  name="heading" id="heading" placeholder="Enter heading">
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" type="description" name="description" id="description"></textarea>
                        </div>

                         <div class="form-group">
                         	<img style="height:90px; width:100px;" src="#" name="image" id="image">
                            <label for="image">Upload Image:</label>
                            <input type="file" class="form-control" onchange="readURL6(this);" name="image" id="image">
                        </div>

                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                         <button type="submit" class="btn btn-primary btn-default">Add Banner</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection