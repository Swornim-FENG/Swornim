<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;

use App\Models\Tenants;
class TenantlandingpageController extends Controller
{
    public function show(Request $request){
        
        $photos = Medias::all();
        $properties = Properties::all();
        $units= Units::all();
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        return view('tenant.tenantlandingpage')->with(compact('photos', 'properties','units','username'));
    }

    public function display(Request $request){
        
        $photos = Medias::all();
        $properties = Properties::all();
        $units= Units::all();
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        // $data=compact('landlord');
        //  $data=compact('username');
        return view('tenant.tenantproductpage')->with(compact('photos', 'properties','units','username'));
    }
}
