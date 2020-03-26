@extends('admin.layouts.layout')

@section('content')
 <div class="col-lg-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Gallery List</h2>
                    </div>
                    <div class="card-body">
                      @if(session('success'))
                      <div id="messagediv" class="alert alert-success">
                          {{session('success')}}
                      </div>
                      @else
                      <div id="errormessage" class="alert alert-error">
                          {{session('error')}}
                      </div>
                      @endif
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                        <th>#</th>
                        <th>Image</th>
                        <!-- <th>Content</th> -->
                        <th>GalleryType</th>
                        <th>Status</th>
                        <th>Action</th>
                       </tr>
                        </thead>
                        <tbody>
                @foreach($data as $key=>$value)
               <tr>
                <th>{{++$key}}</th>
                <td><img height="40" width="40" src="{{asset('public/upload')}}/{{$value->image}}"></td>
                <!-- <td>{{$value->description}}</td> -->
                <td>{{$value->gallerytype}}</td>
                @if($value->status == 1)
                    <td><button onclick="deactivategallery({{$value->id}});" class="btn btn-success btn-sm">Active</button></td>
                    @else
                    <td><button onclick="activategallery({{$value->id}});" class="btn btn-danger btn-sm">Inactive</button></td>
                @endif
                <td><a href="{{URL('admin/editgallery')}}/{{$value->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="getvaluedeletegallery({{$value->id}});" data-toggle="modal" data-target="#myModal3" style="color:white;" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            </tbody>
            @endforeach
              </table>
              {{$data->links()}}
            </div>
          </div>
        </div>{{$data}}
@endsection