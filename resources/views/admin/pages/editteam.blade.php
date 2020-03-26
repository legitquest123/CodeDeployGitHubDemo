@extends('admin.layouts.layout')

@section('content')

<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Add Team</h2>
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
                      <form method="Post" action="{{route('updateteam',$data->id)}}" enctype='multipart/form-data' name="editteamform">
                        @csrf
                        <div class="form-group">
                          <label for="category">Category:</label>
                            <select class="form-control" type="text" name="category" id="category">
                            
                                @foreach($category as $key => $cat)
                                @if($data->category_id == $key+1)
                                 <option selected value="{{$key+1}}">{{$cat}}</option>
                                 @else
                                <option value="{{$key + 1}}">{{$cat}}</option>
                                @endif 
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="subcategory">Subcategory:</label>
                                <select class="form-control" type="text" name="subcategory" id="subcategory">
                                    @foreach($subcategory as $key => $subcat)
                                    @if($data->subcategory_id == $key + 1)
                                     <option selected value="{{$key+1}}">{{$subcat}}</option>
                                     @else
                                    <option value="{{$key + 1}}">{{$subcat}}</option> 
                                    @endif
                                    @endforeach
                            
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control"  value="{{$data->name}}" type="text"  name="name" id="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                          <label for="designation">Designation:</label>
                            <input class="form-control" value="{{$data->designation}}" type="text"  name="designation" id="designation" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                           <!--  <img style="height:20px; width:30px;" src="#" id="profileimage1" alt="your image"></br>
                         <label for="profileimage">Profile Image:</label>
                         
                        <input class="form-control" onchange="readURL(this);" type="file" name="profileimage" id="profileimage"> -->
                         <img src="{{asset('public/upload')}}/{{$data->profileimage}}" style="height:20px; width:30px;" src="#" id="profileimage1" alt="your image"></br>
                         <label for="profileimage">Profile Image:</label>
                             
                            <input class="form-control" onchange="readURL(this);" type="file" name="profileimage" id="profileimage">
                             <input type="hidden" name="oldimage" id="oldimage" value="{{$data->profileimage}}">
                        </div>

                        <div class="form-group">
                        <label for="profileurl">Profile URL:</label>
                            <input class="form-control" type="text" value="{{$data->profileurl}}" name="profileurl" id="profileurl" placeholder="Enter Profileurl">
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
 