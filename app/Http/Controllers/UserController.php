<?php

namespace App\Http\Controllers;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('index');

    }

    public function signUpForm(){

        return view('signUp');

    }   

    public function adduser(Request $request){


        /*$request->validate([
            'name' => 'required|string' ,
            'username' => 'required|string' ,
            'email' => 'required|string' ,
            'password' => 'required|string' ,
            'profile_pic' => 'required|string' 
        ]);*/
        

        $profile = new UserProfile();
        $profile->name = $request->name;
        $profile->username = $request->username;
        $profile->email = $request->email;
        $profile->password = $request->password;
        $profile->post = $request->profile_pic;
        $profile->save();

        return redirect('/blogit');
    }
}
