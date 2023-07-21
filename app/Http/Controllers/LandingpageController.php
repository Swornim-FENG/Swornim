<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
class LandingpageController extends Controller
{
    public function show(){
        
        $photos = Medias::all();
        $properties = Properties::all();
        $units= Units::all();
        return view('landingpage')->with(compact('photos', 'properties','units'));
    }
}
