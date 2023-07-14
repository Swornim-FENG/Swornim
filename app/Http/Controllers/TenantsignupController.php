<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenants;
use App\Models\User;
class TenantsignupController extends Controller
{
    public function signup(){
        return view('tenantsignup');
    }
    public function validate_signup(Request $request){
        $request->validate(
            [
                'Firstname'=>'required',
                'Lastname'=>'required',
                'permanent_address'=>'required',
                'temporary_address'=>'required',
                'phone_number'=>'required|digits:10',
                'email'=>'required|email',
                'password'=>'required|confirmed',
                 'password_confirmation'=>'required'
            ]
            );
            
            $user = new Userstable;
            $user->Fullname = $request['Firstname'] . ' ' . $request['Lastname'];
            
            $requestedEmail = $request['email'];
            
            // Check if the email already exists in the database
            $existingEmail = Userstable::where('email', $requestedEmail)->first();
            
            if ($existingEmail) {
                // Email already taken, show a message or take appropriate action
                return redirect()->route('tenant')->withError('This email has already been taken');
            } else {
                // Assign the email to the user
                $user->email = $requestedEmail;
            
            
            $user->password = \Hash::make($request['password']);
            $user->role_id = 2;
            $user->save();
            $tenants=new Tenants;
            $tenants->Firstname=$request['Firstname'];
            $tenants->Lastname=$request['Lastname'];
            $tenants->phone_number=$request['phone_number'];
            $tenants->permanent_address=$request['permanent_address'];
            $tenants->temporary_address=$request['temporary_address'];
            $lastInsertedUserId = $user->getKey();
            $tenants->user_id = $lastInsertedUserId;
            $tenants->save();
            
            return redirect('/homepage');
        }
}}
