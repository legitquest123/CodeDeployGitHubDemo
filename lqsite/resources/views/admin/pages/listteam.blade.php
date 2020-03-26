@extends('admin.layouts.layout')

@section('content')

  <div class="col-lg-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Team List</h2>
                    </div>
                    <div class="card-body">
                      <!-- @if(session('success'))
                      <div id="messagediv" class="alert alert-success">
                          {{session('success')}}
                      </div>
                      @else
                      <div id="errormessage" class="alert alert-error">
                          {{session('error')}}
                      </div>
                      @endif -->
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Profile Image</th>
                        <th>Profile URL</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                        </thead>
                        <tbody>
                @foreach($data as $key=>$value)
            <tr>
                <th>{{++$key}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->designation}}</td>
                <td><img height="40" width="50" src="{{URL('public/upload')}}/{{$value->profileimage}}"></td>
                <td>{{$value->profileurl}}</td>
                @if($value->status == 1)
                    <td><button onclick="deactivateteam({{$value->id}});" class="btn btn-success btn-sm">Active</button></td>
                    @else
                    <td><button  onclick="activateteam({{$value->id}});" class="btn btn-danger btn-sm">Inactive</button></td>
                @endif
                <td><a href="{{url('admin/edit')}}/{{$value->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="getvaluedeleteteam({{$value->id}});" data-toggle="modal" data-target="#myModal1" style="color:white;" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            </tbody>
            @endforeach
              </table>
              {{$data->links()}}
            </div>
          </div>
        </div>

        
@endsection        