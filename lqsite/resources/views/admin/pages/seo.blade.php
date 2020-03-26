@extends('admin.layouts.layout')

@section('content')

 <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Add Page</h2>
                    </div>
                    <div class="card-body">
                    	 <div class="col-md-10">
                            @if(session('success'))
                            <div id="messagediv" class="alert alert-success">
                                {{session('success')}}
                            </div>
                           @endif
                      <form method="Post" action="{{route('updateseo',$data[0]->id)}}" name="seoform">
                        @csrf
                        <div class="form-group">
                        <label for="analytics">Google Analytics:</label>
                            <textarea class="form-control" name="analytics" id="analytics">{!!$data[0]->analytics!!}</textarea>
                        </div>
                        
                         <div class="form-group">
                            <label for="searchconsole"> Google Search Conole:</label>
                        <textarea class="form-control" name="searchconsole" id="searchconsole">
                        	{!!$data[0]->searchconsole!!}
                        </textarea> 
                        </div>

                         <div class="form-group">
                            <label for="fpixel">Facebook Pixel Code:</label>
                        <textarea class="form-control" name="fpixel" id="fpixel">{!!$data[0]->fpixel!!}</textarea> 
                        </div>
                         <div class="form-group">
                            <label for="lpixel">Linkedin Pixel Code:</label>
                        <textarea class="form-control" name="lpixel" id="lpixel">{!!$data[0]->lpixel!!}</textarea> 
                        </div>
                         <div class="form-group">
                            <label for="fpixel">Google Tag Manager:</label>
                        <textarea class="form-control" name="tagmanager" id="tagmanager">{!!$data[0]->tagmanager!!}</textarea> 
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