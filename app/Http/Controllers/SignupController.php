<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Signup;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class SignupController extends Controller
{
    public function stores(Request $request){
        $input = $request->all();

		if (empty($input['id'])) {
			$prefix = "T";
			$code = sprintf("%'.05d", 1);

			while (true) {
				$check_code = DB::table('signups')
					->where('teacher_id', '=', $prefix . $code)
					->count();
				if ($check_code > 0) {
					$code = sprintf("%'.05d", $code + 1);
				} else {
					break;
				}
			}
			$input['teacher_id'] = $prefix . $code;
        }
         $validatedDate = $request->validate(
             [
                'name'=>'required',
                'Qualification'=>'required',
                 'dob'=>'required',
                 'gender'=>'required',
                 'email'=>'required|email',
                 'password'=>'required|confirmed',
                 'contact'=> 'required|numeric|digits:10',
                 'address'=>'required',
                 'zip'=> 'required|numeric|digits:6',
                 'image'=>'required'
             ],[
                'name.required' => 'Please Enter The Name',
                'address.required' => 'Please Enter The Address',
 
                 'email.required' => 'Please Enter The Email Address',
                'email.email' => 'Please Enter The valid Address',
 
                 'contact.required' => 'Please Enter The Contact',
                 'contact.numeric' => 'Please Enter The Number Only',
                'contact.digits' => 'Please Enter Only 10 digits'
 
              ]);

         $user = new Signup;
         $user->name = $request->input('name');
         $user->teacher_id = $input['teacher_id'] ;
         $user->Qualification = $request->input('Qualification');
         $user->dob = $request->input('dob');
         $user->gender = $request->input('gender');
         $user->email = $request->input('email');
         $user->password = Hash::make( $request->input('password'));
         $user->contact = $request->input('contact');
         $user->address = $request->input('address');
         $user->zip = $request->input('zip');
         $user->image = $request->input('image');
         $user->save();
 
        return redirect('/photo'); 
     }
   
    
    }