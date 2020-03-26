@extends('admin.layout')

@section('content')
<div class="col-lg-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Faq List</h2>
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
                        <th>Heading</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                       </tr>
                        </thead>
                        <tbody>
                @foreach($data as $key=>$value)
               <tr>
                <th>{{++$key}}</th>
                <td>{{$value->heading}}</td>
                <td>{{$value->question}}</td>
                <td>{{$value->answer}}</td>
                <td>{{$value->created_at}}</td>
                @if($value->status == 1)
                    <td><button onclick="deactivatestatus({{$value->id}});" class="btn btn-success btn-sm">Active</button></td>
                    @else
                    <td><button onclick="activatestatus({{$value->id}});" class="btn btn-danger btn-sm">Inactive</button></td>
                @endif
                <td><a href="{{url('admin/editfaq')}}/{{$value->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="getvaluedeletefaq({{$value->id}});" data-toggle="modal" data-target="#myModal5" style="color:white;" class="btn btn-danger btn-sm">Delete</a>
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