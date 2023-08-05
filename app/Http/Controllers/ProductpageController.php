<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\User;
class ProductpageController extends Controller
{
    public function show($id,$eid,$eeid,$eeeid){

        $photos=Medias::find($id);
        $units=Units::find($eid);
        $properties=Properties::find($eeid);
        // $latitude= $properties->Latitude;
        // $longitude= $properties->Longitude;
        $user=User::find($eeeid);
        return view('productpage')->with(compact('photos', 'properties','units','user'));
        // $photos = Medias::all();
        // $properties = Properties::all();
        // $units= Units::all();
        // $userObj = $request->session()->get("user");
        // $username=$userObj->Fullname;
        // $data=compact('landlord');
        //  $data=compact('username');
        
    }
    
}
