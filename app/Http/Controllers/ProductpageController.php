<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\User;
use App\Models\Feedbacks;

class ProductpageController extends Controller
{
    public function show($id,$eid,$eeid,$eeeid){

        $photos=Medias::find($id);
        $units=Units::find($eid);
        $properties=Properties::find($eeid);
        $feedbacks = Feedbacks::where('unit_id',$units->unit_id)->get();
        $userIds = $feedbacks->pluck('user_id')->toArray();
        $userdetails = User::whereIn('user_id', $userIds)->get();
        
        $user=User::find($eeeid);
        return view('productpage')->with(compact('photos', 'properties','units','user','feedbacks','userdetails'));

        // $latitude= $properties->Latitude;
        // $longitude= $properties->Longitude;
        // $photos = Medias::all();
        // $properties = Properties::all();
        // $units= Units::all();
        // $userObj = $request->session()->get("user");
        // $username=$userObj->Fullname;
        // $data=compact('landlord');
        //  $data=compact('username');
        
    }
    
}
