@extends('admin.layouts.layout')

@section('content')

<!-- {{json_encode($category)}} -->
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Edit Career</h2>
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
                      <form method="Post" action="{{route('updatecareer',$data->id)}}" name="editcareerform">
                        @csrf
                        <div class="form-group">
                           <label for="category">Category:</label>
                            <select class="form-control" type="text" name="category" id="category">
                             @foreach($category as $key =>$cat)
                              @if($data->category_id == $key+1)
                           <option selected value="{{$key+1}}">{{$cat}}</option>
                           @else
                           <option value="{{$key+ 1}}">{{$cat}}</option>
                            @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                         <label for="type">Type:</label>
                            <select class="form-control" type="text" name="type" id="type">
                              @foreach($type as $name)
                                @if($data->type == $name)
                                <option selected value="{{$data->type}}">{{$data->type}}</option>
                                @else
                                <option value="{{$name}}">{{$name}}</option>
                                @endif
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="heading">Heading:</label>
                            <input class="form-control" value="{{$data->heading}}" type="text"  name="heading" id="heading" placeholder="Enter Heading">
                        </div>
                        <div class="form-group">
                         <label for="category">Select Career Type:</label>
                            <select class="form-control" type="text" name="careertype" id="careertype">
                              @foreach($careertype as $val)
                                @if($data->careertype == $val)
                                <option selected value="{{$data->careertype}}">{{$data->careertype}}</option>
                                @else
                                <option value="{{$val}}">{{$val}}</option>
                                @endif
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                         <label for="description">Description:</label>
                             <textarea height= "40" id="description" name="description">{{$data->description}}</textarea>
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