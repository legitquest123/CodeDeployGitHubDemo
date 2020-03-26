<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;

class SeoController extends Controller
{
    public function seo()
    {
    	$data = Seo::all();
    	return view('admin.pages.seo',compact('data'));
    }

    public function updateseo(Request $request , $id)
    {

    	$seo = Seo::find($id);
    	$update = $seo->update($request->all());
    	if($update)
    		return redirect()->back()->with('success','Record Updated Successfully!');
    	else
    		return redirect()->back()->with('error','Fail to update Record');
    }
}
