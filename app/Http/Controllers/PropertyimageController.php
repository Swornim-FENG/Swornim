<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\Landlords;
use App\Models\User;
use App\Models\Facility_lists;
use App\Models\Unit_facilities;
use App\Models\Rents;

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
          
       
        $property->description=$request['description'];
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
         

        $facilities=$request['extra_facilities'];
        foreach ($facilities as $facility) {
            Unit_facilities::create([
                'unit_id' => $unit->getKey(),
                'facility_id' => $facility
            ]);
        
        
        }
        
        return redirect('/properties');
        
       

    }
    public function create(Request $request){
        $userObj = $request->session()->get("user");
        $userId=$userObj->user_id;
        // dd($userObj->user_id);
        // $properties=Properties::find($userId);
        
        $properties = Properties::where('user_id', $userId)->get();
        $units = Units::where('user_id', $userId)->get();
        $unitid=$units->pluck('unit_id');
        $photos = Medias::whereIn('unit_id', $unitid)->get();
        $mediaid=$photos->pluck('media_id');
        $propertyid=$properties->pluck('property_id');
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        // dd($mediaid);
        // $photos = Medias::all();
        // $properties = Properties::all();
        // $units= Units::all();

        $rentstatus = Rents::where('landlord_id', $userId)
        ->where('status', 'Unpaid') 
        ->orderBy('created_at', 'desc') 
        ->get();
        
        return view('landlorddashboard.properties',compact('photos', 'properties','units','username','rentstatus'));
    }
    public function deleteProperty($id){
           $property=Properties::find($id);
           if(!is_null($property)){
            $property->delete();
        }
    
        return redirect('/properties');
        
    }

    public function updateProperty($id,$eid,$eeid,Request $request){
        $property=Properties::find($id);
        if(is_null($property)){
            return redirect('/properties');
        }
        else{
            $url = url('/properties/edit') . "/". $id. "/". $eid. "/". $eeid;
            $title="Update details of Your Property";
            $facilities= Facility_lists::get();
            $units = Units::find($eid);
            $unit = Units::where('property_id', $property->property_id)->get();
            $unitid=$unit->pluck('unit_id');
            $photos = Medias::find($eeid);
            $userObj = $request->session()->get("user");
            $username=$userObj->Fullname;
            $userId=$userObj->user_id;
            $unitfacilities= Unit_facilities::whereIn('unit_id',$unitid)->get();
            $facilityid=$unitfacilities->pluck('facility_id')->toArray();
           

            $rentstatus = Rents::where('landlord_id', $userId)
             ->where('status', 'Unpaid') 
             ->orderBy('created_at', 'desc') 
             ->get();
            return view('landlorddashboard.propertyadd',compact('units','photos','unitfacilities','property','facilities','url','title','facilityid','username','rentstatus'));
        }}

        public function editProperty($id,$eid,$eeid,Request $request){
            $property=Properties::find($id);
            $property->description=$request['description'];
            $property->address=$request['address'];
            $property->condition=$request['condition'];
            $property->number_of_rooms=$request['rooms'];
            $property->Latitude=$request['latitude'];
            $property->Longitude=$request['longitude'];
            $property->Verification="Verified";
            $property->save();

            $unit=Units::find($eid);
            $unit->price=$request['price'];
            $unit->Condition=$request['condition'];
            $unit->Average_rating=2;
            $unit->status="Available";
            $unit->save();

            $media=Medias::find($eeid);
            $name =$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/',$name);
            $media->Media_file=$name;
            $media->save();
            
            Unit_facilities::where('unit_id', $eid)->delete();
            $facilities=$request['extra_facilities'];
           foreach ($facilities as $facility) {
            Unit_facilities::create([
                'unit_id' => $eid,
                'facility_id' => $facility
            ]);}
            return redirect('/properties');
            

        }
     
 
     
     
 
}
