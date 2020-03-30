<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function index()
    {
    	$data = Notes::all()->where('trash' ,'=', 0);
    	$trashdata = Notes::all()->where('trash','=',1);
    	return view('pages.notes',compact('data','trashdata'));
    }

    public function addNote(Request $request)
    {
      // dd($request);
      $obj = new Notes;
      $obj->user_id = '1';
      $obj->fact = $request->fact;
      $obj->title = $request->title;
      $obj->description = $request->description;
      $obj->date_created = Date('Y-m-d');
      $obj->date_modified = Date('Y-m-d');
      $save = $obj->save();
      if($save)
      	return redirect()->back()->with('success','Note Save Successfully');
      else
      	return redirect()->back()->with('error','Fail to Save Note');
    }

    public function getNoteDetail(Request $request)
    {
    	$id = $request->id;
    		$data = Notes::where('id','=',$request->id)->get();
    	$view = '';
    	foreach($data as $value)
    	{
    		$view .= '<h4 class="h4 card-title d-block mb-1 font-weight-bold" >'.$value['title'].'</h4>
                        <hr class="mb-3">
                        <div class="row mb-2">
                          <div class="col-sm-12 b-b">
                            <div class="label" style="font-size:15px; font-weight:bold; padding:0px 0px 10px 0px;"></div>
                            <div class="label" style="font-size:12px;">'.$value['date'].'</div>
                            <h4 style="padding:6px 0px 10px 0px;">'.$value['title'].'</h4>
                            <p style="font-size:13px; text-align:justify;">'.$value['description'].'</p>
                          </div>
                        </div>';
    	}
    	return $view;
    }
}
