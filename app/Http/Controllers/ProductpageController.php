<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\User;
use App\Models\Feedbacks;
use App\Models\Facility_lists;
use App\Models\Unit_facilities;

class ProductpageController extends Controller
{
    public function show($id,$eid,$eeid,$eeeid){

        $photos=Medias::find($id);
        $units=Units::find($eid);
        $properties=Properties::find($eeid);
        $feedbacks = Feedbacks::where('unit_id',$units->unit_id)->get();
        $userIds = $feedbacks->pluck('user_id')->toArray();
        $userdetails = User::whereIn('user_id', $userIds)->get();
       // Get facility IDs associated with the specific unit
       $unitFacilityIds = Unit_facilities::where('unit_id', $units->unit_id)->pluck('facility_id')->toArray();

      // Get facilities based on the retrieved IDs
      $facilities = Facility_lists::whereIn('facility_id', $unitFacilityIds)->get();

        $user=User::find($eeeid);
        return view('productpage')->with(compact('photos', 'properties','units','user','feedbacks','userdetails','facilities'));

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
