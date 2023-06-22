<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\Tenant_signupController;
use App\Http\Controllers\Lanlord_signupController;

Route::get('/signup',[SignupController::class,'signup']);
Route::get('/login',function(){
    return view('login');
});

Route::post('/signup',[SignupController::class,'validate_signup']);

Route::get('/landlord',function(){
    return view('landlord');
});
Route::get('/home',function(){
     return view('home');
});
Route::get('/about',function(){
    return view('about');
});

Route::get('/tenant',[Tenant_signupController::class,'signup']);

Route::post('/tenant',[Tenant_signupController::class,'validate_signup']);

Route::get('/lanlord',[Lanlord_signupController::class,'signup']);

Route::post('/lanlord',[Lanlord_signupController::class,'validate_signup']);