<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function store(Request $request){
          $input = $request->all();

		if (empty($input['id'])) {
			$prefix = "STU";
			$code = sprintf("%'.05d", 1);

			while (true) {
				$check_code = DB::table('users')
					->where('student_id', '=', $prefix . $code)
					->count();
				if ($check_code > 0) {
					$code = sprintf("%'.05d", $code + 1);
				} else {
					break;
				}
			}
			$input['student_id'] = $prefix . $code;
        }
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|confirmed',
                'address'=>'required'

            ]
            );

        $user = new User;
        $user->student_id = $input['student_id'] ;
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
