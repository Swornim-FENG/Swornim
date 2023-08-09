<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landlords;
use App\Models\User;

class LandlordsignupController extends Controller
{
    public function signup(){
        return view('landlordsignup');
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
            $user=new User;
            $user->Fullname = $request['Firstname'] . ' ' . $request['Lastname'];
            
            $requestedEmail = $request['email'];
            
            // Check if the email already exists in the database
            $existingEmail = User::where('email', $requestedEmail)->first();
            
            if ($existingEmail) {
                // Email already taken, show a message or take appropriate action
                return redirect()->route('landlord')->withError('This email has already been taken');
                
            } else {
                // Assign the email to the user
                $user->email = $requestedEmail;

            $user->password=\Hash::make($request['password']);
            $user->role_id=3;
            $user->save();
            $landlords=new Landlords;
            $landlords->Firstname=$request['Firstname'];
            $landlords->Lastname=$request['Lastname'];
            $landlords->phone_number=$request['phone_number'];
            $landlords->permanent_address=$request['permanent_address'];
            $landlords->temporary_address=$request['temporary_address'];
            $lastInsertedUserId = $user->getKey();
            $landlords->user_id=$lastInsertedUserId;
            $landlords->save();
            return redirect('/landlord/dashboard');
       
        }
}}
