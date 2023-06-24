<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landlords;
use App\Models\Userstable;

class Lanlord_signupController extends Controller
{
    public function signup(){
        return view('lanlord_signup');
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
            echo"<pre>";
            print_r($request->all());
            $landlords=new Landlords;
            $landlords->Firstname=$request['Firstname'];
            $landlords->Lastname=$request['Lastname'];
            $landlords->phone_number=$request['phone_number'];
            $landlords->permanent_address=$request['permanent_address'];
            $landlords->temporary_address=$request['temporary_address'];
            $landlords->save();
            // $users=new Userstable;
            // $users->Fullname = $request['Firstname'] . ' ' . $request['Lastname'];
            // $users->email=$request['email'];
            // $users->password=$request['password'];
            // $users->role_id=1;
            // $users->save();
            return redirect('/homepage');
       
        }
        
}
