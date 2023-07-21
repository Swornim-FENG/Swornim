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
        $userObj = $request->session()->get("user");
        $userId=$userObj->user_id;
        // dd($userObj->user_id);
        // dd(Auth::check());
        // dd(Auth::id());
        $media=new Medias;
        $property=new Properties;
        $unit=new Units;
        $landlord=new Landlords;
        $user=new User;
        
        $property->address=$request['address'];
        $property->condition=$request['condition'];
        $property->number_of_rooms=$request['rooms'];
        $property->Latitude=$request['latitude'];
        $property->Longitude=$request['longitude'];
        
        $property->user_id =$userId;
        $property->Verification="Verified";
        
        $property->save();
        
        $unit->price=$request['price'];
        $unit->Condition=$request['condition'];
        $unit->Average_rating=2;
        $lastInsertedpropertyId = $property->getKey();
        $unit->property_id=$lastInsertedpropertyId;
        $unit->user_id =$userId;
        $unit->status="Available";
        $unit->save();

        $name =$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/',$name);
        $media->Media_file=$name;
        
        $media->property_id=$lastInsertedpropertyId;
        $lastInsertedUnitId = $unit->getKey();
        $media->unit_id=$lastInsertedUnitId;
        $media->save();
        return redirect('/properties');

    }
    public function create(){
        $photos = Medias::all();
        $properties = Properties::all();
        $units= Units::all();
        
        return view('landlorddashboard.properties',compact('photos', 'properties','units'));
    }
    public function delete($id,$eid,$eeid){
           $media=Medias::find($id);
           if(!is_null($media)){
           $media->delete();
           Units::find($eid)->delete();
           Properties::find($eeid)->delete();
           }
           return redirect('/properties');
        
    }
}
