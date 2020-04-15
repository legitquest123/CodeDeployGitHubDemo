<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Models\Notes;
use App\Models\Judgment;
use App\Models\ReportProblem;
use DB;
use PDF;

class BookmarkController extends Controller
{

	public function index()
	{
	  $notecount = Notes::all()
      ->where('user_id','1')
      ->count();

    $bookmark = Bookmark::where('user_id','1')->paginate(5); 

    $bookmarkcount = Bookmark::all()
     ->where('user_id','1')
     ->count();

    return view('pages.bookmark',compact('notecount','bookmark','bookmarkcount'));
	}

    public function saveBookmark(Request $request)
    {
       $obj = new Bookmark();
       $count = DB::table('bookmark')
       ->where('user_id','1')
       ->where('judgment_id','=','1')
       ->count();
       
       if($count > 0)
       {
        echo "BookMark Already Saved!";
       }
       else
       {
         $obj->judgment_id = '1';
         $obj->user_id = '1';
         $obj->slug = 'Chandrashekhar Verma v.State of M.P.';
         $obj->date_created = date('Y-m-d');
         $obj->date_modified = date('Y-m-d');
         $save = $obj->save();
         if($save)
         echo "Bookmark Save Successfully!";
         else
         echo "Bookmark Not Save"; 
       }
        
    }

    public function deleteBookmark(Request $request)
    {
      $id = $request->id;
      // dd($id);
      $bookmark = Bookmark::where('id','=',$id);
      $delete = $bookmark->delete();
      if($delete)
        echo "Bookmark Deleted Successfully!";
      else
        echo "Fail to Delete Bookmark!";
    }

    public function saveProblemArea(Request $request)
    {
      $obj = new ReportProblem();
      $obj->user_id = '1';
      $obj->problem_area = implode(",",$request->problem_area);
      $obj->description = $request->description;
      $obj->date_created = date('Y-m-d');
      $obj->date_modified = date('Y-m-d');
      $save = $obj->save();
      if($save)
        echo "Problem Reported Successfully!";
      else
        echo "Fail to Report a Problem";
    }

        /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF()
    {
        $data = Judgment::all();
        $pdf = PDF::loadView('pages.myPDF', compact('data'));
        return $pdf->download($data[0]->title.'.pdf');
        // return $pdf->stream('my.pdf');    
    } 

    public function pdf()
    {
        $data = Judgment::all();

        $pdf = PDF::loadView('pages.myPDF2', compact('data'));
        return $pdf->download($data[0]->title.'.pdf');
        // return $pdf->stream('print.pdf');  
    }
}
