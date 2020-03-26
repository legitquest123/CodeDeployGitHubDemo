@extends('admin.layouts.layout')

@section('content')

  <div class="col-lg-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Career List</h2>
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
                        <th>Type</th>
                        <th>Heading</th>
                        <th>Status</th>
                        <th>Action</th>
                       </tr>
                        </thead>
                        <tbody>
                @foreach($data as $key=>$value)
               <tr>
                <th>{{++$key}}</th>
                <td>{{$value->type}}</td>
                <td>{{$value->heading}}</td>
                @if($value->status == 1)
                    <td><button onclick="deactivatecareer({{$value->id}});" class="btn btn-success btn-sm">Active</button></td>
                    @else
                    <td><button onclick="activatecareer({{$value->id}});" class="btn btn-danger btn-sm">Inactive</button></td>
                @endif
                <td><a href="{{url('admin/editcareer')}}/{{$value->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="getvaluedeletecareer({{$value->id}});" data-toggle="modal" data-target="#myModal" style="color:white;" class="btn btn-danger btn-sm">Delete</a>
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