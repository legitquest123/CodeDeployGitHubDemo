<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use App\User;
use DB;
use Redirect;

class UserController extends Controller
{
    public function signin()
    {
    	return view('admin.pages.signin');
    }

    public function dashboard()
    {
      return view('admin.pages.dashboard');
    }

    public function login(Request $request)
    {
    	 $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) 
        {
           $userStatus = Auth::User()->status;
           if($userStatus == 1)
           {
            $user = Auth::user();
            Session::put('key',$request->email);
            Session::put('pimage',$user->profileimage);
            return Redirect::to('admin/dashboard');
           }
           else
           return redirect()->back()->with('error1','Sorry you are not an Active User'); 
        }
        else
        {
            // $request->session()->flash()->with('error','Invalid Credentials');
            // return redirect('signin'); 
            return redirect()->back()->with('error','Invalid Credentials');
        }
     }

     public function changepassword(Request $request)
     {
      return view('admin.pages.changepassword');
     }

     public function updatepassword(Request $request)
     {
        $userid = Auth::id();
        $user = User::find($userid);

        if(Hash::check($request->oldpassword , $user->password))
        {
            if($request->newpassword == $request->confirmpassword)
            {
              if($request->newpassword == $request->oldpassword)
              {
                return redirect()->back()->with('error3','New Password Cannnot be same as old password');
              }
              else
              {
                $user->password = bcrypt($request->newpassword);
                $user->save();
               return redirect()->back()->with('success','Password Changed Successfully');
              }
             
            }
            else
            {
               return redirect()->back()->with('error2','New Password and Confirm Password doesnot match');
            }
        }
        else
        {
           return redirect()->back()->with('error1','Old Password is not Correct');
        }
     }

     public function profile()
     {
      $status = ['InActive','Active'];
      $id = Auth::id();
      $data = User::find($id);
      return view('admin.pages.profile',compact('data','status'));
     }

     public function updateprofile(Request $request)
     {
         $id = Auth::id();
         $team = User::find($id);
         if($request->hasFile('profileimage'))
         {
                    $photo = $request->file('profileimage');
                    $names = $photo->getClientOriginalName();
                    $destinationPath = public_path('/upload');
                    $photo->move($destinationPath, $names);
                    $team->name = $request->name;
                    $team->email = $request->email;
                    $team->status = $request->status;
                    $team->profileimage = $names;
                    $team->Save();
                    return redirect()->back()->with('success','Profile Updated Successfully!'); 
          }
          else
          {
              $team->name = $request->name;
              $team->email = $request->email;
              $team->status = $request->status;
              $team->profileimage =  $request->oldimage;
              $team->Save();
              return redirect()->back()->with('success','Profile Updated Successfully'); 
          }
      }
    public function logout()
    {
    	 Auth::logout();
       return redirect(\URL::previous());
    }
}
