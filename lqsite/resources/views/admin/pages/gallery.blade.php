@extends('admin.layouts.layout')

@section('content')
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Add Gallery</h2>
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
                      <form method="Post" action="{{route('addgallery')}}" name="galleryform" enctype='multipart/form-data'>
                        @csrf
                         <div class="form-group">
                         <label for="gallerytype">Select Gallery Type:</label>
                            <select class="form-control" type="text" onchange="getgallerytype()" name="gallerytype" id="gallerytype">
                              <option value="Image">Image</option>
                              <option value="Video" selected>Video</option>
                            </select>
                        </div>
                        <div class="form-group">
                       <img style="height:90px; width:100px;" src="#" id="image" name="image" alt="your image">
                       <br>
                        <label for="image">Upload Image:</label>
                            <input type="file" onchange="readURL4(this);" class="form-control" name="image" id="image">
                        </div>

                        <div class="form-group">
                          <label for="videourl">Enter URL:</label>
                          <input type="text" name="videourl" id="videourl" class="form-control">
                        </div>
                       
                        <div class="form-group">
                        <label for="description">Description:</label>
                            <textarea class="form-control" type="description" name="description" id="description"></textarea>
                        </div>
                 <div class="form-footer pt-4 pt-5 mt-4 border-top">
                  <button type="submit" class="btn btn-primary btn-default">Add to Gallery</button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection