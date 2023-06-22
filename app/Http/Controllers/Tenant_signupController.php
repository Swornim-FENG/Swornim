<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tenant_signupController extends Controller
{
    public function signup(){
        return view('Tenant_signup');
    }
    public function validate_signup(Request $request){
        $request->validate(
            [
                'firstName'=>'required',
                'lastName'=>'required',
                'phoneNumber'=>'required|digits:10',
                'email'=>'required|email',
                'password'=>'required|confirmed',
                 'password_confirmation'=>'required'
            ]
            );
            echo"<pre>";
            print_r($request->all());
            
        }
}
