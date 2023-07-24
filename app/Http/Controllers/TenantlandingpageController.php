<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\User;

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

    public function display($id,$eid,$eeid,$eeeid,Request $request){
        
        $photos=Medias::find($id);
        $units=Units::find($eid);
        $properties=Properties::find($eeid);
        $user=User::find($eeeid);
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        return view('tenant.tenantproductpage')->with(compact('photos', 'properties','units','username','user'));
    }
}
