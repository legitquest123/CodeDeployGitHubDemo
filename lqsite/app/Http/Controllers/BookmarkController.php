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

  /*Index() function is used to retunr data for login user

     @returns 

     $notecount for login user
     $bookmark Bookmark for login user
     $bookmarkcount for login user

     Created By: Namit Singh

     Date-Created: 14-April-2020 
  */

	public function index()
	{
	  $notecount = Notes::all()
      ->where('user_id','1')
      ->where('trash','=','0')
      ->count();

    $bookmark = Bookmark::where('user_id','1')->paginate(5); 

    $bookmarkcount = Bookmark::all()
     ->where('user_id','1')
     ->count();

    return view('pages.bookmark',compact('notecount','bookmark','bookmarkcount'));
	}

    /*saveBookmark() function is used to save newly added bookmark

     Created By: Namit Singh

     Date-Created: 14-April-2020 
    */

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

    /*deleteBookmark() function is used to deletebookmark from bookmark page

     Created By: Namit Singh

     Date-Created: 14-April-2020 
    */

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


    /*saveProblemArea() function is used to save a problem of Report A Problem Popup

     Created By: Namit Singh

     Date-Created: 14-April-2020 
    */

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

    /*generatePDF() function is used to generatePDF for one Column Layout

     Created By: Namit Singh

     Date-Created: 15-April-2020 
    */

    public function generatePDF()
    {
        $data = DB::table('judgment')
        ->where('user_id','=','1')
        ->where('id','=','1')
        ->get();

        $pdf = PDF::loadView('pages.myPDF', compact('data'));
        // return $pdf->download($data[0]->title.'.pdf');
        return $pdf->download('my.pdf');
        // return $pdf->stream('my.pdf');    
    } 


    /*pdf() function is used to generatePDF for two Column Layout

     Created By: Namit Singh

     Date-Created: 15-April-2020 
    */

    public function pdf()
    {
        $data = DB::table('judgment')
        ->where('user_id','=','1')
        ->where('id','=','1')
        ->get();

        $pdf = PDF::loadView('pages.myPDF2', compact('data'));
        // return $pdf->download($data[0]->title.'.pdf');
        return $pdf->download('my.pdf');
        // return $pdf->stream('print.pdf');  
    }
}
