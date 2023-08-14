<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility_lists;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\Landlords;
use App\Models\User;
use App\Models\Unit_facilities;
use App\Models\Rents;

class PropertyaddController extends Controller
{
    public function show(Request $request){
        $url= url('/properties');
        $photos=new Medias;
        $property=new Properties;
        $units=new Units;
        $unitfacilities=  new Unit_facilities;
        $facilityid=[];
       $facilities= Facility_lists::get();
       $userObj = $request->session()->get("user");
       $username=$userObj->Fullname;
       $userId=$userObj->user_id;

       $rentstatus = Rents::where('landlord_id', $userId)
        ->where('status', 'Unpaid') 
        ->orderBy('created_at', 'desc') 
        ->get();

       $title="Enter details of Your Property";
        return view('landlorddashboard.propertyadd',compact('facilities','url','title','photos','property','units','unitfacilities','facilityid','username','rentstatus'));
    }
}
