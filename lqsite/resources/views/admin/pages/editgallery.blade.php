@extends('admin.layouts.layout')

@section('content')
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Edit Gallery</h2>
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
                      <form method="Post" action="{{route('updategallery',$data->id)}}" enctype='multipart/form-data' name="editgalleryform">
                        @csrf
                        <div class="form-group">
                         <label for="gallerytype">Select Gallery Type:</label>
                            <select class="form-control" type="text" onchange="getgallerytype();" name="gallerytype" id="gallerytype">
                              @foreach($gallerytype as $val)
                              @if($data->gallerytype == $val)
                              <option selected value="{{$data->gallerytype}}">{{$data->gallerytype}}</option>
                              @else
                              <option value="{{$val}}">{{$val}}</option>
                               @endif
                            @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                       <img style="height:90px; width:100px;" src="{{asset('public/upload')}}/{{$data->image}}" id="image" name="image" alt="your image">
                       <br>
                        <label for="image">Upload Image:</label>
                            <input type="file" onchange="readURL5(this);" class="form-control" name="image" id="image">
                            <input type="hidden" name="oldimage" id="oldimage" value="{{$data->image}}">
                        </div>

                        <div class="form-group">
                          <label for="videourl">Enter URL:</label>
                          <input type="text" name="videourl" id="videourl" class="form-control">
                        </div>
                       
                        <div class="form-group">
                        <label for="description">Description:</label>
                            <textarea class="form-control" type="description" name="description" id="description">{{$data->description}}</textarea>
                        </div>
                 <div class="form-footer pt-4 pt-5 mt-4 border-top">
                  <button type="submit" class="btn btn-primary btn-default">Update Gallery</button>
                          
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection