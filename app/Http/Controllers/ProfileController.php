<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Landlords;
use App\Models\User;
use App\Models\Units;
use App\Models\Rents;
use App\Models\Properties;

use App\Models\Tenants;

class ProfileController extends Controller
{
    public function show(Request $request){
        // dd(Auth::user());
        // $data = $request->session()->get("user");
        // dd($data->user_id);

     //   dd(\session('userId'));
        // $user=new User;
        // $userId=$user->getKey();
        // session()->put('userId', $userId);
        // session()->start();
        // dump(session()->all());
        // dd(session('userId'));
        // $landlord=Landlords::all();
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        $userId=$userObj->user_id;
        $totalproperties=Properties::where('user_id',$userId)->count();
        $properties=Properties::where('user_id',$userId)->get();
        $propertyid=$properties->pluck('property_id');
        $units=Units::whereIn('property_id',$propertyid)->get();
        
        $rents = Rents::where('landlord_id', $userId)
        ->where('status', 'paid') 
        ->orderBy('created_at', 'desc') 
        ->get();
        $tenantids=$rents->pluck('tenant_id');
        $users=User::whereIn('user_id',$tenantids)->get();
        $tenants=Tenants::whereIn('user_id',$tenantids)->get();

        // $data=compact('landlord');
        
        return view('landlorddashboard.dashboard')->with(compact('username','totalproperties','properties','units','rents','users','tenants',));
    }

    public function notifications(Request $request){
        $userObj = $request->session()->get("user");
        $userId=$userObj->user_id;
        $units=Units::where('user_id',$userId);
        $unitstatus=$units->pluck('status');
        $rents = Rents::where('landlord_id', $userId)
        ->where('status', 'Unpaid') 
        ->orderBy('created_at', 'desc') 
        ->get();
        $tenantids=$rents->pluck('tenant_id');
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        $users=User::whereIn('user_id',$tenantids)->get();
        $tenants=Tenants::whereIn('user_id',$tenantids)->get();
        
        return view('landlorddashboard.notifications')->with(compact('rents','users','tenants','unitstatus','username'));
    }
    public function showtenants(Request $request){
        $userObj = $request->session()->get("user");
        $userId=$userObj->user_id;
        $units=Units::where('user_id',$userId);
        $unitstatus=$units->pluck('status');
        $rents = Rents::where('landlord_id', $userId)
        ->where('status', 'paid') 
        ->orderBy('created_at', 'desc') 
        ->get();
        $tenantids=$rents->pluck('tenant_id');
        $users=User::whereIn('user_id',$tenantids)->get();
        $tenants=Tenants::whereIn('user_id',$tenantids)->get();
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        
        return view('landlorddashboard.tenant')->with(compact('rents','users','tenants','unitstatus','username'));
    }

    public function removetenant($id,$eid){
        
        $rents=Rents::find($id);
        $unit=Units::find($eid);
        $unit->status="Available";
        $unit->save();
           if(!is_null($rents)){
            $rents->delete();
            return redirect()->back();
        }}

    public function logout(){
       auth()->logout();
       return redirect('/login');
    }
}
