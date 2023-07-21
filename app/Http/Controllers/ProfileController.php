<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Landlords;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(Request $request){
        // dd(Auth::user());
        // $data = $request->session()->get("user");
        // dd($data->user_id);

     //   dd(\session('userId'));
        // $user=new User;
        // $userId=$user->getKey();
        // session()->put('userId', $userId);
        // session()->start();
        // dump(session()->all());
        // dd(session('userId'));
        // $landlord=Landlords::all();
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        // $data=compact('landlord');
         $data=compact('username');
        return view('landlorddashboard.profile')->with($data);
    }

    public function logout(){
       auth()->logout();
       return redirect('/login');
    }
}
