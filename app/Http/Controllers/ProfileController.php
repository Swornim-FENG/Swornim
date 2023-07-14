<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Landlords;
use App\Models\User;
class ProfileController extends Controller
{
    public function show(){
        // dd(Auth::user());
        dd(\session('userId'));
        $landlord=Landlords::all();
        $data=compact('landlord');
        return view('landlorddashboard.profile')->with($data);
    }

    public function logout(){
       auth()->logout();
       return redirect('/login');
    }
}
