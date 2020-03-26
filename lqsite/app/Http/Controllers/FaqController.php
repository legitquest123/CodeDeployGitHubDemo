<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Page;

class FaqController extends Controller
{
    public function index()
    {
    	return view('admin.pages.faq');
    }

    public function addfaq(Request $request)
    {
    	$faq = new Faq;
    	$faq->heading = $request->heading;
    	$faq->question = $request->question;
    	$faq->answer = $request->answer;
    	$faq->created_at = date("Y-m-d");
    	$faq->save();
    	return redirect()->back()->with('success','Faq Added Successfully!');
    }

    public function listfaq()
    {
    	$data = Faq::orderBy('id','desc')->paginate(10);
    	return view('admin.pages.list-faq',compact('data'));
    }
    public function editfaq($id)
    {
    	$data = Faq::find($id);
    	return view('admin.pages.editfaq',compact('data'));
    }

    public function updatefaq(Request $request , $id)
    {
    	$faq = Faq::find($id);
    	$faq->heading = $request->heading;
    	$faq->question = $request->question;
    	$faq->answer = $request->answer;
    	$faq->created_at = date("Y-m-d");
    	$faq->save();
    	return redirect()->back()->with('success','Faq Updated Successfully!');
    }

   public function deletefaq(Request $request)
    {
        $id = $request->id;
        $data = Faq::find($id);
        $delete = $data->delete();
        if($delete)
        return redirect()->back()->with('success','Record Deleted  Successfully');
        else
        return redirect()->back()->with('error','Fail to Delete Record');
    }

    public function deactivate(Request $request)
    {
    	// dd($request->id);
    	$data = Faq::find($request->id);
    	if($data->status == '1')
    	{
    		$data->status = '0';
    		$data->save();
    		return redirect()->back()->with('success','Deactivate Successfully!');
    	}
    }

    public function activate(Request $request)
    {
    	// dd($request->id);
    	$data = Faq::find($request->id);
    	if($data->status == '0')
    	{
    		$data->status = '1';
    		$data->save();
    		return redirect()->back()->with('success','Activate Successfully!');
    	}
    }
     public function getfaq(Request $request)
    {
        $slug = request()->segments(1);
        // echo $slug[0];
        // exit;
        $data = Faq::all()->where('status','=',1);
        $slugData = Page::where('slug',$slug)->first();
        return view('pages.faq',['data'=>$data,'slugData'=>$slugData]);
    }
}
