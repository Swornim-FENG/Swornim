<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Units;
use App\Models\Rents;
use App\Models\User;
use App\Models\Tenants;

class BookingController extends Controller
{
    public function showbooking($id){
        $rents = Rents::where('unit_id', $id)->get();
        $tenantids=$rents->pluck('tenant_id');
        $users=User::whereIn('user_id',$tenantids)->get();
        $tenants=Tenants::whereIn('user_id',$tenantids)->get();
        

        return view('landlorddashboard.bookings')->with(compact('rents','users','tenants'));

    }
    public function acceptbooking($id){
        $rents=Rents::find($id);
        $rents->status="paid";
        $rents->save();
        return redirect()->back();
    }

    public function rejectbooking($id,$eid){
        
        $rents=Rents::find($id);
        $unit=Units::find($eid);
        $unit->status="Available";
        $unit->save();
           if(!is_null($rents)){
            $rents->delete();
            return redirect()->back();
        }
    }
}
