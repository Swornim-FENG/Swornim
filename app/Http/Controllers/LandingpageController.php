<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
class LandingpageController extends Controller
{
    public function show(Request $request){
        
        // $properties = Properties::whenget();
        // foreach($properties as $property){
        //     // dd(Properties::find(126)->medias);
        // dd($property->medias);}
        // $search = $request['search'] ?? "";
        
        // if($search !=""){
        //     $properties = Properties::where('address','LIKE',"$search%")->get();
        //     $photos = Medias::whereIn('property_id', $properties->pluck('property_id'))->get();
        //     $units = Units::whereIn('property_id', $properties->pluck('property_id'))->get();
        // }
        // else{
        //     $properties = Properties::all();
        //     $photos = Medias::whereIn('property_id', $properties->pluck('property_id'))->get();
        //     $units = Units::whereIn('property_id', $properties->pluck('property_id'))->get();
        // }
        $query = Properties::query();
       
        $searchQuery = request('search');

        $query->when($searchQuery, function ($q) use ($searchQuery){
         return $q->where('address', 'LIKE', "$searchQuery%");
          });

          $query->whereHas('units', function ($q) {
            $q->where('status', '<>', 'UnAvailable');
        });
        
         $properties = $query->get();
         
        
        return view('landingpage')->with(compact( 'properties','searchQuery'));
    }
}
