<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use App\Models\ShareNote;
use App\Models\NoteBook;
use Illuminate\Support\Facades\Route;
use App\Mail\NoteMail;
use Illuminate\Support\Facades\Mail;
use DB;
class NotesController extends Controller
{
    public function index()
    {
    	$data = Notes::orderBy('id','desc')->where('trash','=', '0')->paginate(4);
    	$trashdata = Notes::orderBy('id','desc')->where('trash','=','1')->paginate(4);
    	$notebookdata = NoteBook::orderBy('id','desc')->where('status','=','1')->paginate(4);
      $notecount = Notes::all()->count();
    	return view('pages.notes',compact('data','trashdata','notebookdata','notecount'));
    }
    public function detail()
    {
    	$data = Notes::orderBy('id','desc')
    	->where('status','=','1')
    	->where('trash','=','0')
      ->get();
    	return view('pages.detail',compact('data'));
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
      	// return redirect()->back()->with('success','Note Save Successfully');
        echo "Notes Added Successfully!";
      else
      	// return redirect()->back()->with('error','Fail to Save Note');
        echo "Fail to Add Notes";
    }

    public function addingnote(Request $request)
    {
      $obj = new Notes;
      $obj->notebook_id = $request->notebookid;
      $obj->user_id = '1';
      $obj->fact = $request->fact;
      $obj->title = $request->title;
      $obj->description = $request->description;
      $obj->date_created = Date('Y-m-d');
      $obj->date_modified = Date('Y-m-d');

      $save = $obj->save();
      if($save)
        return redirect()->back()->with('success','Note Added Successfully');
        // echo "Notes Added Successfully!";
      else
        return redirect()->back()->with('error','Fail to Save Note');
        // echo "Fail to Add Notes"; 
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
                          <div style="height:100%; border-style:none; text-align:justify;" class="col-sm-12 b-b">
                            <div class="label" style="font-size:15px; font-weight:bold; padding:0px 0px 10px 0px;"></div>
                            
                            <h4 style="padding:6px 0px 10px 0px;">'.$value['title'].'</h4>
                            <p style="font-size:13px; text-align:justify;">'.$value['description'].'</p>
                            <div class="label" style="font-size:12px; margin-bottom:4px;">'.$value['date_created'].'</div>
                          </div>
                        </div>
                       ';
    	}
    	return $view;
    }

    public function addNoteBook(Request $request)
    {
    	$obj = new NoteBook;
    	if($request->parent_id == 0){
	    	$obj->parent_id = 0;
	    	$obj->user_id = '1';
	    	$obj->name = $request->name;
	    	$obj->description = $request->description;
	    	$obj->date_created  = date('Y-m-d');
	    	$save = $obj->save();
	    	if($save)
	    		return redirect()->back()->with('success','NoteBook Added Successfully!');
	    	else
	    		return redirect()->back()->with('error','Fail to Add NoteBook');	    		
    	}
    	else{
    		$obj->parent_id = $request->parent_id;
	    	$obj->user_id = '1';
	    	$obj->name = $request->name;
	    	$obj->description = $request->description;
	    	$obj->date_created  = date('Y-m-d');
	    	$save = $obj->save();
	    	if($save)
	    		return redirect()->back()->with('success','NoteBook Added Successfully!');
	    	else
	    		return redirect()->back()->with('error','Fail to Add NoteBook');	
    	}
    	
    }

    public function getNoteBookNotes(Request $request)
    {
      $id = $request->id;	
      $getnotes = Notes::where('notebook_id','=',$id)->get();
      $view = '';
    	foreach($getnotes as $value)
    	{
    		$view .= '<h4 class="h4 card-title d-block mb-1 font-weight-bold" >'.$value['title'].'</h4>
                        <hr class="mb-3">
                        <div class="row mb-2">
                          <div style="text-align:justify;" class="col-sm-12 b-b">
                            <div class="label" style="font-size:15px; font-weight:bold; padding:0px 0px 10px 0px;"></div>
                            <h4 style="padding:6px 0px 10px 0px;">'.$value['title'].'</h4>
                            <p style="font-size:13px; text-align:justify;">'.$value['description'].'</p>
                            <div class="label" style="font-size:12px; margin-bottom:4px;">'.$value['date_created'].'</div>
                          </div>
                        </div>';
    	}
    	return $view;
    }

    public function showtrash()
    {
    	$tdata = Notes::all()->where('trash' ,'=',1);
    	return view('pages.trash',compact('tdata'));
    }

    public function deletetrash()
    {
    	$delete = Notes::where('trash','=',1)->delete();
    	if($delete)
        echo "Trash Empty Successfully!";
    		// return redirect()->back()->with('success','Trash Empty Successfully!');
    	else
        echo "Trash is Aleady Empty!";
    		// return redirect()->back()->with('error','Trash is already empty');
    }

    public function deletenote(Request $request)
    {
    	$id = $request->id;
    	$note = Notes::find($id);
      // dd($note);
      if($note->trash == '0')
      {
         $note->trash = '1';
         $trash = $note->save();
          if($trash)
          echo "Note Moved to trash Successfully!";
          else
          echo "Fail to Move notes";
      }
      else
      {
        // $note->trash = '0';
        echo "Already in Trash";
      }
    	// $delete = $note->delete();		
    }

    public function generateurl(Request $request)
    {
        $id = $request->id;
        $title = DB::table('note')->where('id','=',$id)->pluck('title');
        $noteid = DB::table('note')->where('id','=',$id)->pluck('id');
        // $path  = $request->path();
        $path = $request->root().'/'.md5($request->id);
        // $path = $request->url();
        $arr = array(
        'title' => $title,
        'note_id' => $noteid,
        'path' => $path
        );
       return $arr; 
    }

    public function sharenote(Request $request)
    { 
      $email = $request->email;  
      $from_user_id = '1';
      $obj = new ShareNote();
      $count = DB::table('users')->where('email','=',$request->email)->count();
      if($count > 0)
      {
          $user_id = DB::table('users')->where('email','=',$request->email)->pluck('id');
          // dd($user_id[0]); 
          $obj->note_id = $request->noteid;
          $obj->from_user_id = $from_user_id;
          $obj->to_user_id = $user_id[0];
          $obj->date_created = date('Y-m-d');
          $save = $obj->save();
          if($save)
           {
                Mail::to($email)->send(new NoteMail($request->firstname));
                // return redirect()->back()->with('success','Note Share Successfully!');
                echo "Notes Shared Successfully!";   
           }
            else
            return redirect()->back()->with('error','Fail to Share Notes');   
      }
      else
      {
        echo "Email id not exists";
      }
    }

    public function getemails(Request $request)
    {
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('users')->where('email','LIKE',"%{$query}%")->get();
         $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%">';
          foreach($data as $row)
          {
           $output .= ' 
           <li><a style="color:#989898; background-color:#fff; margin-left:5px;" id="judgeanchortag" href="#">'.$row->email.'</a></li>
           ';
          }
      $output .= '</ul>';
      echo $output;
         // return $emails;
        }
    }


    public function deletenotebook(Request $request)
    {
      $id = $request->id;
      $notes = Notes::where('notebook_id','=',$id);
      $delete = $notes->delete();
      $notebook = NoteBook::where('id','=',$id);
      $deletenotebook = $notebook->delete();
     
      if($deletenotebook)
      {
        echo "Notebook Deleted Successfully!";
      }
      else
      {
        echo "Fail to delete Notebook";
      }
    }

    public function getnotebookdata(Request $request)
    {
      $id = $request->id;
      $notebooknotes = Notes::where('notebook_id','=',$id)->get();
      $view = '';
    
      foreach($notebooknotes as $key=> $value)
      {
        $view .= '<ul style="list-style-type:none;">
          <li data-toggle="modal" data-target="#showNotebookNote" onclick="getNotebookNotesDetail('.$value['id'].');" style="margin-left:50px; margin-top:15px; font-size:13px; cursor:pointer;"> <i class="fa fa-file"></i>'."  ".$value['title'].'</li>'
          ;
      }
      return $view;
    }

    public function undoTrash(Request $request)
    {
      $id = $request->id;
      $note = Notes::find($id);
      if($note->trash == '1')
      {
        $note->trash = '0';
        $move = $note->save();
        if($move)
          echo "Note Move Successfully!";
        else
          echo "Fail to Move Note;";
      }
    }

    public function emptytrash(Request $request)
    {
      $id = $request->id;
      $note = Notes::find($id);
      $delete = $note->delete();
      if($delete)
        echo "Note Deleted Successfully!";
      else
        echo "Fail to Delete Note!";
    }

    public function getNotebookNotesDetail(Request $request)
    {
      $id = $request->id;
      $data = Notes::find($id);
      return $data;
    }

    public function moveNote(Request $request)
    {
      $noteid = $request->noteid;
      $notebookid = $request->notebookid;
      $update = DB::table('note')
              ->where('id', $noteid)
              ->update(['notebook_id' => $notebookid]);
      if($update)
      echo "Note Moved Successfully!";
      else
      echo "Already in Notebook!";        
    }
}
