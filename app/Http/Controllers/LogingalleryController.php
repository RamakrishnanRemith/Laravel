<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signup;
use Illuminate\Support\Facades\Auth;

class LogingalleryController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = Signup::where('email',$email)->first();
            Auth::login($user);
            return redirect('/imageupload');
        }else{
            return back()->withErrors(['Invalid credentials!']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/photo');
    }
}