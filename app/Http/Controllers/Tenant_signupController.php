<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenants;
class Tenant_signupController extends Controller
{
    public function signup(){
        return view('Tenant_signup');
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
            $tenants=new Tenants;
            $tenants->Firstname=$request['Firstname'];
            $tenants->Lastname=$request['Lastname'];
            $tenants->phone_number=$request['phone_number'];
            $tenants->permanent_address=$request['permanent_address'];
            $tenants->temporary_address=$request['temporary_address'];
            $tenants->save();
            return redirect('/homepage');
        }
}
