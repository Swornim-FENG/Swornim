<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(){
        return view('signup');
    }
    public function validate_signup(Request $request){
        $request->validate(
            [
                'firstName'=>'required',
                'lastName'=>'required',
                'username'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed',
                 'password_confirmation'=>'required'
            ]
            );
        }

            

    
}
