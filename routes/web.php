<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TenantsignupController;
use App\Http\Controllers\LandlordsignupController;
use App\Http\Controllers\LoginController;

Route::get('/signup',[SignupController::class,'signup']);


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

Route::get('/tenant',[TenantsignupController::class,'signup'])->name('tenant');

Route::post('/tenant',[TenantsignupController::class,'validate_signup']);

Route::get('/lanlord',[LandlordsignupController::class,'signup'])->name('landlord');

Route::post('/lanlord',[LandlordsignupController::class,'validate_signup']);


Route::get('/homepage',function(){
    return(view('homepage'));
});

Route::get('/msh',function(){
    return(view('landingpage'));
});

Route::get('/test',function(){
    return(view('test'));
});

Route::get('/landlorddashboard',function(){
    return(view('landlorddashboard'));
});

Route::get('/login',[LoginController::class,'loginpage'])->name('login');

Route::post('/login',[LoginController::class,'login']);
Route::get('/admin',function(){
    return( view('admindashboard'));
});




