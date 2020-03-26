<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Page;
use Helpers;


class CareerController extends Controller
{

    /**
    showCareer() function is used to return view of career page in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function showcareer()
    {
    	return view('admin.pages.showcareer');
    }


    /**
    addcareer() function is used to Add Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/


    public function addcareer(Request $request)
    {
        $career = new Career();
    	$career->category_id  = $request->category;
    	$career->type = $request->type;
        $career->careertype = $request->careertype;
    	$career->heading = $request->heading;
    	$career->description = $request->description;
    	$save = $career->save();
    	if($save)
    	return redirect()->back()->with('success','Record Created Successfully!'); 
        else
        return redirect()->back()->with('error','Failed to Create Record');    	
    	   
    }

    /**
    index() function is used to List all the  Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function index()
    {
    	$data = Career::paginate(10);
    	return view('admin.pages.listcareer',compact('data'));
    }

    /**
    editcareer() function is used to Edit all the  Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function editcareer($id)
    {
     $data = Career::find($id);
     $type = ['Full Time','Part Time'];
     $careertype = ['JOB','CAP'];
     $category = ['R & D Associate Manager','Digital Marketing/Manager','Sales Associate/Manager','Operations Associate/Manager','Customer Success Associate/Manager','Quality Assurance','Full Stack Developer','Front End Developer'];
     return view('admin.pages.editcareer',compact('data','type','category','careertype'));
    }


    /**
    updatecareer() function is used to Update all the  Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function updatecareer(Request $request , $id)
    {
          $data = Career::find($id);
	      $update = $data->update($request->all());
	      if($update)
	      return redirect()->back()->with('success','Record Updated Successfully');
	      else
	      return redirect()->back()->with('error','Fail to Update Record');	
    }

    /**
    @deletecareer() function is used to Delete the Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function deletecareer(Request $request)
    {
        $id = $request->id;
    	$data = Career::find($id);
    	$delete = $data->delete();
    	if($delete)
    	return redirect()->back()->with('success','Record Deleted  Successfully');
        else
        return redirect()->back()->with('error','Fail to Delete Record');
    }


    /**
    getcareer() function is used to get all records on basis of Slug for FrontEnd

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function getcareer(Request $request)
    {
        $slug = request()->segments(1);
        $data = Career::all()->where('status','=',1);
        $slugData = Page::where('slug',$slug)->first();
        return view('pages.career',['data' => $data,'slugData'=>$slugData]);
    }


    /**
    deactivatecareer() function is used to Deactiavte Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/

    public function deactivatecareer(Request $request)
    {
        $data = Career::find($request->id);
        if($data->status == '1')
        {
            $data->status = '0';
            $data->save();
            return redirect()->back()->with('success','Deactivate Successfully!');
        }
    }


    /**
    activatecareer() function is used to Actiavte Careers in Admin

    Created By Namit Singh

    Date Created  3-March-2020
    **/


    public function activatecareer(Request $request)
    {
        $data = Career::find($request->id);
        if($data->status == '0')
        {
            $data->status = '1';
            $data->save();
            return redirect()->back()->with('success','Activate Successfully!');
        }
    }

}
