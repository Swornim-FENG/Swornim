<?php

namespace App\Http\Controllers;
use App\Models\Userstable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        
         
         $credentials = $request->only('email', 'password');
 
         if (Auth::attempt($credentials)) {
           
           if(Auth::user()->role_id==2)
           return redirect('/homepage');

           else if(Auth::user()->role_id==3)
           return redirect()->intended('/landlorddashboard');
            
        }
        else{
            return redirect()->route('login')->withError('Invalid email or password.');
        }
        
        
    }
    
    public function loginpage(){
        return view('login');
    }
}
