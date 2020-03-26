@extends('admin.layouts.layout')

@section('content')
<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Edit Page</h2>
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
                      <form method="Post" action="{{route('updatepage',$data->id)}}" name="editpageform">
                        @csrf
                     <div class="form-group">
                            <label for="heading">Heading:</label>
                            <input class="form-control" type="text" value="{{$data->heading}}"  name="heading" id="heading" placeholder="Enter heading">
                        </div>

                        <div class="form-group">
                          <label for="slug">Slug:</label>
                            <input class="form-control" type="text" value="{{$data->slug}}" name="slug" id="slug" placeholder="Enter slug">
                        </div>
                        <div class="form-group">
                        <label for="description">Description:</label>
                            <textarea class="form-control" type="description" name="description" id="description">{{$data->description}}</textarea>
                        </div>
                         <div class="form-group">
                            <label for="metatitle">Meta title:</label>
                            <input class="form-control" type="text" value="{{$data->meta_title}}" name="meta_title" id="meta_title" placeholder="Enter metatitle">
                        </div>
                        <!--  <div class="form-group">
                            <label for="heading">Heading:</label>
                            <input class="form-control" type="text"  name="heading" id="heading" placeholder="Enter heading">
                        </div> -->
                         <div class="form-group">
                            <label for="metakeywords">Meta Keywords:</label>
                            <input class="form-control" type="text"  value="{{$data->meta_keywords}}" name="meta_keywords" id="meta_keywords" placeholder="Enter metakeywords">
                        </div>
                         <div class="form-group">
                            <label for="metacanonical">Meta Canonical:</label>
                            <input class="form-control" type="text"  value="{{$data->meta_canonical}}" name="meta_canonical" id="meta_canonical" placeholder="Enter metacanonical">
                        </div>

                         <div class="form-group">
                            <label for="metadescription">Meta Description:</label>
                        <textarea class="form-control" type="text" name="meta_description" id="meta_description" placeholder="Enter meta description">{{$data->meta_description}}</textarea> 
                        </div>

                         <div class="form-group">
                            <label for="schema">Schema:</label>
                        <textarea class="form-control" type="text"  name="schema" id="schema" placeholder="Enter schema">{{$data->schema}}</textarea> 
                        </div>
                       
                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                          <button type="submit" class="btn btn-primary btn-default">Update</button>
                          <!-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
@endsection
