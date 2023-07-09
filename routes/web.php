<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;



Route::get('/signup', [SignupController::class, 'signup']);
Route::get('/login', function () {
    return view('login');
});
Route::get('/login.html', function () {
    return view('login');
});
Route::post('/signup', [SignupController::class, 'validate_signup']);
Route::get('/product-page', function () {
    return view('product-page');
});
Route::get('/landing-page', function () {
    return view('landing-page');
});
Route::get('/header', function () {
    return view('header');
});
