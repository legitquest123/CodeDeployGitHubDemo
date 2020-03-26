<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function showpage()
    {
    	return view('admin.pages.showpage');
    }
    public function addpage(Request $request)
    {
        // dd($request);
     
         // return redirect()->back()->with('error','Please fill all the details');
       // else
       // {
         $page = new Page();
         $save = $page->create($request->all());
         if($save)
         return redirect()->back()->with('success','Record Created Successfully!');
		 else
         return redirect()->back()->with('error1','Fail to create record');
       // }
    }
    public function index()
    {
    	$data = Page::orderBy('id','desc')->paginate(10);
    	return view('admin.pages.listpage',compact('data'));
    }
    public function editpage($id)
    {
    	$data = Page::find($id);
    	return view('admin.pages.editpage',compact('data'));
    }

    public function updatepage(Request $request , $id)
    {
    	$page = Page::find($id);
    	$update = $page->update($request->all());
    	if($update)
    		return redirect()->back()->with('success','Record Updated Successfully!');
    	else
    		return redirect()->back()->with('error','Fail to update Record !');
    }
    public function deletepage(Request $request)
    {
        $id = $request->id;
    	$data = Page::find($id);
    	$delete = $data->delete();
    	if($delete)
    	return redirect()->back()->with('success','Record Deleted  Successfully');
        else
        return redirect()->back()->with('error','Fail to Delete Record');
    }

    public function findslug(Request $request)
    {
        $slug = request()->segments(1);
        $slugData = Page::where('slug',$slug)->first();
        return view('pages.page',compact('slugData'));
    }

}
