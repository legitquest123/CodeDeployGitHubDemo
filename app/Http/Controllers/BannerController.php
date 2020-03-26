<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
    	return view('admin.pages.banner');
    }
    
    public function addbanner(Request $request)
    {
    	$data = new Banner;
    	$value = $data->getMaxOrderType();
    	if($request->hasFile('image'))
        {
          $banner = new Banner;
          $image = $request->file('image');
          $name = $image->getClientOriginalName();
          $destinationpath = public_path('/upload');
          $image->move($destinationpath,$name);
          $banner->heading = $request->heading;
          $banner->description = $request->description;
          $banner->image = $name;
          $banner->order_type = $value+1;
          $banner->created_at = date("Y-m-d");
          $banner->save();
          return redirect()->back()->with('success','Banner Added Successfully!');
        }
    	else
    	{
            return redirect()->back()->with('error','Fail to Add Banner');
    	}
    }

    public function listbanner()
    {
      $data = Banner::orderBy('id','desc')->paginate(10);
      return view('admin.pages.list-banner',compact('data'));
    }

    public function editbanner($id)
    {
      $data = Banner::find($id);
      return view('admin.pages.editbanner',compact('data'));
    }
    public function updatebanner(Request $request, $id)
    {
       $obj = Banner::find($id);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $name = $image->getClientOriginalname();
            $destinationpath = public_path('upload');
            $image->move($destinationpath,$name);
            $obj->image = $name;
            $obj->heading = $request->heading;
            $obj->description = $request->description;
            $obj->order_type = $request->order_type;
            $update = $obj->save();
            if($update)
            return redirect()->back()->with('success','Banner Updated Successfully!');
            else
            return redirect()->back()->with('error','Fail to update Gallery');   
        }
        else
        {
          $obj->image = $request->oldimage;
          $obj->heading = $request->heading;
          $obj->description = $request->description;
          $obj->order_type = $request->order_type;
          $update = $obj->save();
          if($update)
          return redirect()->back()->with('success','Banner Updated Successfully!');
          else
          return redirect()->back()->with('error','Fail to update Gallery');   
        }  
    }

    public function deletebanner(Request $request)
    {
      $id = $request->id;
      $data = Banner::find($id);
      $delete = $data->delete();
      if($delete)
      return redirect()->back()->with('success','Record Deleted  Successfully');
      else
      return redirect()->back()->with('error','Fail to Delete Record');
    }

}
