<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/dashboard');
    }

    public function profile()
    {
        return view('settings.profile');
    }

    public function profile_save(Request $request)
    {
        $user=auth()->user();

        $this->validate($request,[
           'name'=>'required|min:3|max:255',
           'email'=>['required','email',Rule::unique('users','email')->ignore($user->id)],
        ]);

        //save the user info
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();

        return back()->with('status','Successfully updated your profile info');
    }

    public  function security()
    {
         return view('settings.security');
    }

    public function security_save( Request $request)
    {

        $user=auth()->user();

        $this->validate($request,[
            'password'=>'required|confirmed',
        ]);

        $user->password=Hash::make($request->password);
        $user->save();

        //save the password info

        return back()->with('status','Successfully updated your password info');
    }


}
