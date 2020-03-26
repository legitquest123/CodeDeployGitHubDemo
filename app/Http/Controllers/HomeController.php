<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
      $data = Banner::all();
    	return view('pages.home2',compact('data'));
    }
}
