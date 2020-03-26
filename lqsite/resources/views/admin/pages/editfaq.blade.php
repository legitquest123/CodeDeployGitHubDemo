@extends('admin.layouts.layout')

@section('content')
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Edit Frequently Asked Question</h2>
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
                      <form method="Post" action="{{route('updatefaq',$data->id)}}" name="editfaqform">
                        @csrf
                       
                        <div class="form-group">
                            <label for="heading">Heading: </label> <span style="color:red;">*</span>
                            <input class="form-control" type="text"  value="{{$data->heading}}" name="heading" id="heading" placeholder="Enter heading">
                        </div>

                         <div class="form-group">
                        <label for="description">Question:</label>
                            <textarea class="form-control" name="question" id="question">{{$data->question}}</textarea>
                        </div>

                        <div class="form-group">
                        <label for="description">Answer:</label>
                            <textarea class="form-control" name="answer" id="answer">{{$data->answer}}</textarea>
                        </div>

                 <div class="form-footer pt-4 pt-5 mt-4 border-top">
                  <button type="submit" class="btn btn-primary btn-default">Update Faq</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>

@endsection