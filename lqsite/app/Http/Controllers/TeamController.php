<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Page;

class TeamController extends Controller
{
    public function showteam()
    {
     return view('admin.pages.showteam');
    } 
    public function addteam(Request $request)
    {
    		if($request->hasFile('profileimage'))
    	    {
		        $photo = $request->file('profileimage');
		        $names = $photo->getClientOriginalName();
				$destinationPath = public_path('/upload');
		        $photo->move($destinationPath, $names);
		        $team = new Team;
		        $team->category_id = $request->category;
		        $team->subcategory_id = $request->subcategory;
		        $team->name = $request->name;
		        $team->designation = $request->designation;
		        $team->profileimage = $names;
		        $team->profileurl = $request->profileurl;
		        $team->Save(); 
		        return redirect()->back()->with('success','Record Created Successfully!');
    	   }
    	else
    	{
    		return redirect('showteam');
    	}
    }
    public function index()
    {
    	$data = Team::orderBy('id','desc')->paginate(10);
    	return view('admin.pages.listteam',compact('data'));
    }


    public function editteam($id) 
    {
      $data = Team::find($id);
      $category = ['Team','National Advisory','Internationl Advisory','Consultant','Campus'];	
      $subcategory = ['Technology Team','Management Team','R&D Team','Sales Team','Human Resources','Office Helpline'];
      return view('admin.pages.editteam' , compact('data','category','subcategory'));
    }

    
    public function updateteam(Request $request, $id)
    {
            // dd($request);
    	    $team = Team::find($id);
            if(!empty($request->name) && $request->profileurl && $request->designation)
            {
                if($request->hasFile('profileimage'))
                {
                    $photo = $request->file('profileimage');
                    $names = $photo->getClientOriginalName();
                    $destinationPath = public_path('/upload');
                    $photo->move($destinationPath, $names);
                    $team->category_id = $request->category;
                    $team->subcategory_id = $request->subcategory;
                    $team->name = $request->name;
                    $team->designation = $request->designation;
                    $team->profileimage = $names;
                    $team->profileurl = $request->profileurl;
                    $team->Save();
                    return redirect()->back()->with('success','Record Updated Successfully!'); 
              }
                else
                {
                    $team->category_id = $request->category;
                    $team->subcategory_id = $request->subcategory;
                    $team->name = $request->name;
                    $team->designation = $request->designation;
                    $team->profileimage =  $request->oldimage;
                    $team->profileurl = $request->profileurl;
                    $team->Save();
                    return redirect()->back()->with('success','Record Updated Successfully'); 
                }
            }
            else
                return redirect()->back()->with('error','Pleae fill all fields');
    		
    }

    public function deleteteam(Request $request)
    {
        $id = $request->id;
    	$team = Team::find($id);
    	$delete = $team->delete();
    	if($delete)
    		return redirect()->back()->with('success','Record Deleted Successfully');
    	else
    		return redirect()->back()->with('error','Record Not Deleted');
    }
   public function getteam(Request $request)
   {
     $slug = request()->segments(1);
     $data =  Team::where('category_id','=','1')->where('status','=',1)->get();
     $data1 = Team::where('category_id','=','2')->where('status','=',1)->get();
     $data2 = Team::where('category_id','=','3')->where('status','=',1)->get();
     $data3 = Team::where('category_id','=','4')->where('status','=',1)->get();
     $data4 = Team::where('category_id','=','5')->where('status','=',1)->get();
     $slugData = Page::where('slug',$slug)->first();

     $team = ['Technology Team' ,'Management Team','R&D Team','Sales Team','Human Reources','Office Helpline'];
     // $category = ['Team','National Advisory','Consultant','Campus','International Advisory'];
     return view('pages.team',compact('data','team','category','data1','data2','data3','data4','slugData'));
   }

    public function deactivateteam(Request $request)
    {
        // dd($request->id);
        $data = Team::find($request->id);
        if($data->status == '1')
        {
            $data->status = '0';
            $data->save();
            return redirect()->back()->with('success','Deactivate Successfully!');
        }
    }

    public function activateteam(Request $request)
    {
        // dd($request->id);
        $data = Team::find($request->id);
        if($data->status == '0')
        {
            $data->status = '1';
            $data->save();
            return redirect()->back()->with('success','Activate Successfully!');
        }
    }

   public function aboutus()
   {
    return view('pages.about');
   }

   public function contact()
   {
    return view('pages.contact');
   }

}
