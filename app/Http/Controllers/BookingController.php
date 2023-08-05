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
}
