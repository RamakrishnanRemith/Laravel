<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|confirmed',
                'address'=>'required'

            ]
            );

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        $user->address = $request->input('address');
        $user->save();

        Auth::login($user);

        return redirect('/login');
        }
        public function show()
    {
        $data= User::all();
       return view('auth.menu',['users'=>$data]);
    }
}
