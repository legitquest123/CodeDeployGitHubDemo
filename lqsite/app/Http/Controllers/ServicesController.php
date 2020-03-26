<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Service;
use App\Mail\ServiceMail;
use Illuminate\Support\Facades\Mail;
use Alert;
use App\ResearchRequest;

class ServicesController extends Controller
{
    public function getdata()
    {
        $slug = request()->segments(1);
        $data = Page::where('slug',$slug)->first();
        return view('pages.services',compact('data'));
    }
    public function addservice(Request $request)
    {
    	$obj = new Service();
    	$email = $request->email;
    	$save = $obj->create($request->all());
        if($save)
        {
  			Mail::to($email)->send(new ServiceMail($request->firstname));
        	return redirect()->back()->with('success','Mail Sent Successfully!');	
        }
        else
        	return redirect()->back()->with('error','Failed');
    }

    public function getdata1()
    {
        $slug = request()->segments(1);
        $data = Page::where('slug',$slug)->first();
        return view('pages.researchrequest',compact('data'));
    }

    public function addresearchrequest(Request $request)
    {
        $obj = new ResearchRequest();
        $email = $request->email;
        $save = $obj->create($request->all());
        if($save)
        {
            Mail::to($email)->send(new ServiceMail($request->firstname));
            return redirect()->back()->with('success','Thank you for enquiry. Out team will try to contect you ASAP!');   
        }
        else
            return redirect()->back()->with('error','Failed');
    }

    public function termscondition()
    {
        return view('pages.termscondition');
    }
    public function policy()
    {
      return view('pages.policy');
    }
}
