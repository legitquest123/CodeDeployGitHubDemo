<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Page;
class GalleryController extends Controller
{
    public function index()
    {
    	return view('admin.pages.gallery');
    }
    public function addgallery(Request $request)
    {
    	if($request->hasFile('image'))
    	{
    		$obj = new Gallery();
    		$image = $request->file('image');
    		$name = $image->getClientOriginalname();
    		$destinationpath = public_path('/upload');
    		$image->move($destinationpath,$name);
            $obj->gallerytype = $request->gallerytype;
    		$obj->image = $name;
    		$obj->description = $request->description;
            $obj->videourl = $request->videourl;
    		$save = $obj->save();
    		if($save)
    		return redirect()->back()->with('success','Gallery Added Successfully!');
    		else
    		return redirect()->back()->with('error','Fail to add Gallery');
    	}
    }

    public function listgallery()
    {
    	$data = Gallery::orderBy('id','desc')->paginate(10);
    	return view('admin.pages.listgallery',compact('data'));  
    }

    public function editgallery($id)
    {
        $data = Gallery::find($id);
        $gallerytype = ['Image','Video'];
        return view('admin.pages.editgallery',compact('data','gallerytype'));
    }
    
    public function updategallery(Request $request , $id)
    {
        // dd($request);
        $obj = Gallery::find($id);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $name = $image->getClientOriginalname();
            $destinationpath = public_path('upload');
            $image->move($destinationpath,$name);
            $obj->gallerytype = $request->gallerytype;
            $obj->image = $name;
            $obj->description = $request->description;
            $update = $obj->save();
            if($update)
            return redirect()->back()->with('success','Gallery Updated Successfully!');
            else
            return redirect()->back()->with('error','Fail to update Gallery');   
        }
        else
        {
          $obj->gallerytype = $request->gallerytype;
          $obj->image = $request->oldimage;
          $obj->description = $request->description;
          $update = $obj->save();
          if($update)
          return redirect()->back()->with('success','Gallery Updated Successfully!');
          else
          return redirect()->back()->with('error','Fail to update Gallery');   
        }  
    }

    public function deletegallery(Request $request)
    {
        $id = $request->id;
        $data = Gallery::find($id);
        $delete = $data->delete();
        if($delete)
        return redirect()->back()->with('success','Record Deleted  Successfully');
        else
        return redirect()->back()->with('error','Fail to Delete Record');
    }

    public function getgallery()
    {
        $slug = request()->segments(1);
        // echo $slug[0];
        // exit;
        $data = Gallery::all()->where('status','=',1);
        $slugData = Page::where('slug',$slug)->first();
        return view('pages.gallery',['data'=>$data,'slugData'=>$slugData]);
    }

    public function deactivategallery(Request $request)
    {
        $data = Gallery::find($request->id);
        if($data->status == '1')
        {
            $data->status = '0';
            $data->save();
            return redirect()->back()->with('success','Deactivate Successfully!');
        }
    }
    public function activategallery(Request $request)
    {
        $data = Gallery::find($request->id);
        if($data->status == '0')
        {
            $data->status = '1';
            $data->save();
            return redirect()->back()->with('success','Asctivate Successfully!');
        }
    }
}
