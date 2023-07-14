<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\Landlords;
use App\Models\User;

class PropertyimageController extends Controller
{
    public function store(Request $request){
        dd(Auth::check());
        dd(Auth::id());
        $media=new Medias;
        $property=new Properties;
        $unit=new Units;
        $landlord=new Landlords;
        $user=new Userstable;
        $property->address=$request['address'];
        $property->condition=$request['condition'];
        $property->number_of_rooms=$request['rooms'];
        $property->Latitude=$request['latitude'];
        $property->Longitude=$request['longitude'];
        $id = Auth::userid();
        $property->user_id = $id;
        $property->Verification="Verified";
        
        // $property->save();
        
        // $unit->price=$request['price'];
        // $unit->Condition=$request['condition'];
        // $unit->Average_rating=$request['rating'];
        // $lastInsertedpropertyId = $property->getKey();
        // $unit->property_id=$lastInsertedpropertyId;
        // $unit->status="Available";
        // $unit->save();

        // $name =$request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/images/',$name);
        // $media->Media_file=$name;
        
        // $media->property_id=$lastInsertedpropertyId;
        // $lastInsertedUnitId = $unit->getKey();
        // $media->unit_id=$lastInsertedUnitId;
        // $media->save();
        

    }
    public function create(){
        return view('landlorddashboard.properties');
    }
}
