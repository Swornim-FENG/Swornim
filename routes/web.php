<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TenantsignupController;
use App\Http\Controllers\LandlordsignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyimageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProductpageController;
use App\Http\Controllers\TenantlandingpageController;
use App\Http\Controllers\PropertyaddController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\BookingController;

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
    return(view('landingpage1'));
});

Route::get('/test',function(){
    return(view('test'));
});

Route::get('/login',[LoginController::class,'loginpage'])->name('login');

Route::post('/login',[LoginController::class,'login']);
Route::get('/admin',function(){
    return( view('admindashboard'));
});
Route::get('/sidebar',function(){
    return(view('landlorddashboard.sidebar'));
});

Route::get('/landlord/notifications',[ProfileController::class,'notifications']);

Route::get('/landlord/dashboard',[ProfileController::class,'show']);

Route::get('/logout',[ProfileController::class,'logout']);

Route::get('/tenants',function(){
    return(view('landlorddashboard.tenant'));
});

Route::get('/landlorddashboard',function(){
    return(view('landlorddashboard'));
});

Route::post('/properties',[PropertyimageController::class,'store']);

Route::get('/properties',[PropertyimageController::class,'create']);

Route::get('/properties/delete/{id}',[PropertyimageController::class,'deleteProperty']);

Route::get('/landingpage',[LandingpageController::class,'show']);

Route::get('/test1',function(){
    return(view('test1'));
});
  
Route::get('/product/{id}/{eid}/{eeid}/{eeeid}',[ProductpageController::class,'show']);

Route::get('/tenant/landingpage',[TenantlandingpageController::class,'show']);

Route::get('/tenant/productpage/{id}/{eid}/{eeid}/{eeeid}',[TenantlandingpageController::class,'display']);

Route::get('/landlord/addproperty',[PropertyaddController::class,'show']);

Route::post('/tenant/feedback/{id}',[TenantlandingpageController::class,'feedback']);

Route::get('/properties/update/{id}/{eid}/{eeid}',[PropertyimageController::class,'updateProperty']);

Route::post('/properties/edit/{id}/{eid}/{eeid}',[PropertyimageController::class,'editProperty']);

Route::get('/map',[MapController::class,'index']);

Route::post('/tenant/bookings/{id}',[TenantlandingpageController::class,'bookings']);

Route::get('/properties/bookings/{id}',[BookingController::class,'showbooking']);

Route::get('/properties/bookings/accept/{id}',[BookingController::class,'acceptbooking']);

Route::get('/properties/bookings/reject/{id}',[BookingController::class,'rejectbooking']);







