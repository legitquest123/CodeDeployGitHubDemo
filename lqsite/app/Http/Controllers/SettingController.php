<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
    	$data = Setting::all();
    	return view('admin.pages.sitesetting',compact('data'));
    }
    
    public function updatesetting(Request $request , $id)
    {
      $team = Setting::find($id);
      if($request->hasFile('frontendlogo') && $request->hasFile('backendlogo'))
      {
      	    $photo = $request->file('frontendlogo');
      	    $frontname = $photo->getClientOriginalName();
      	    $destinationPath = public_path('/upload');
      	    $photo->move($destinationPath, $frontname);

      	    $photo1 = $request->file('backendlogo');
      	    $backname = $photo1->getClientOriginalName();
      	    $destinationPath1 = public_path('/upload');
      	    $photo1->move($destinationPath1, $backname);

      	    $team->copyright = $request->copyright;
	        $team->frontendlogo = $frontname;
	        $team->backendlogo = $backname;
	        $team->socialmedia = $request->socialmedia;
	        $team->footertabs = $request->footertabs;
	        $team->Save();
	        return redirect()->back()->with('success','Record Updated Successfully!'); 
	  }
	  else if($request->hasFile('frontendlogo'))
	  {
	  	    $photo = $request->file('frontendlogo');
      	    $frontname = $photo->getClientOriginalName();
      	    $destinationPath = public_path('/upload');
      	    $photo->move($destinationPath, $frontname);

      	    $team->copyright = $request->copyright;
	        $team->frontendlogo = $frontname;
	        $team->backendlogo = $request->oldimage2;
	        $team->socialmedia = $request->socialmedia;
	        $team->footertabs = $request->footertabs;
	        $team->Save();
	        return redirect()->back()->with('success','Record Updated Successfully!'); 
	  }
	   else if($request->hasFile('backendlogo'))
	   {
	   	        $photo1 = $request->file('backendlogo');
      	        $backname = $photo1->getClientOriginalName();
      	        $destinationPath1 = public_path('/upload');
      	        $photo1->move($destinationPath1, $backname);
      	        
	   	        $team->copyright = $request->copyright;
		        $team->frontendlogo = $request->oldimage1;
		        $team->backendlogo = $backname;
		        $team->socialmedia = $request->socialmedia;
		        $team->footertabs = $request->footertabs;
		        $team->Save();
				return redirect()->back()->with('success','Record Updated Successfully'); 
	   }
        else
		{
	        $team->copyright = $request->copyright;
	        $team->frontendlogo = $request->oldimage1;
	        $team->backendlogo = $request->oldimage2;
	        $team->socialmedia = $request->socialmedia;
	        $team->footertabs = $request->footertabs;
	        $team->Save();
			return redirect()->back()->with('success','Record Updated Successfully'); 
          }
    }
}
