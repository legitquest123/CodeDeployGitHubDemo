@extends('admin.layouts.layout')

@section('content')
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Edit Banner</h2>
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
                      <form method="Post" action="{{route('updatebanner',$data->id)}}" name="editbannerform" enctype='multipart/form-data' >
                        @csrf
                       
                        <div class="form-group">
                            <label for="heading">Heading: </label> <span style="color:red;">*</span>
                            <input class="form-control" type="text" value="{{$data->heading}}" name="heading" id="heading" placeholder="Enter heading">
                        </div>
                        <div class="form-group">
                            <!-- <label for="heading">Heading: </label> <span style="color:red;">*</span> -->
                            <input class="form-control" type="hidden" value="{{$data->order_type}}" name="order_type" id="order_type">
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" type="description" name="description" id="description">{{$data->description}}</textarea>
                        </div>

                         <div class="form-group">
                         	<img style="height:90px; width:100px;" src="{{asset('public/upload')}}/{{$data->image}}" height="40" width="40" name="image" id="image">
                          <br>
                            <label for="image">Upload Image:</label>
                            <input type="file" class="form-control" onchange="readURL7(this);" name="image" id="image">
                            <input type="hidden" name="oldimage" id="oldimage" value="{{$data->image}}">
                        </div>

                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                         <button type="submit" class="btn btn-primary btn-default">Update Banner</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection