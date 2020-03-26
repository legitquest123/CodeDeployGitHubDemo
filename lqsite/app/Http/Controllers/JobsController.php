<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CareerMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function jobapplication(Request $request)
    {
      // $obj = new Jobs;
      if($request->hasFile('resume'))
        {
          $email = $request->email;	
          $obj = new Jobs;
          $image = $request->file('resume');
          $name = $image->getClientOriginalName();
          $destinationpath = public_path('/upload');
          $image->move($destinationpath,$name);
          $obj->Name = $request->name;
          $obj->Email = $request->email;
          $obj->Contact = $request->contact;
          $obj->LinkedinURL = $request->url;
          $obj->Resume = $name;
          $obj->JobType = $request->jobtype;
          $obj->ApplyFor = $request->applyfor;

          $attachment = [
          public_path("upload/".$name),
          ];
          // $obj->created_at = date("Y-m-d");
          $save = $obj->save();
          {
          	Mail::to($email)->send(new CareerMail($request->name , $request->jobtype, $request->applyfor, $attachment));
          	return redirect()->back()->with('success','Your Job Posted Successfully!');
          }
          
        }
    	else
    	{
            return redirect()->back()->with('error','Fail to Add Jobs');
    	}
    }
}
