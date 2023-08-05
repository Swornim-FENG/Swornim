<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Properties;
use App\Models\Units;
use App\Models\User;
use App\Models\Feedbacks;
use App\Models\Tenants;
use App\Models\Rents;

class TenantlandingpageController extends Controller
{
    public function show(Request $request){
        
        $search = $request['search'] ?? "";
        
        if($search !=""){
            $properties = Properties::where('address','LIKE',"$search%")->get();
            $photos = Medias::whereIn('property_id', $properties->pluck('property_id'))->get();
            $units = Units::whereIn('property_id', $properties->pluck('property_id'))->get();
        }
        else{
            $properties = Properties::all();
            $photos = Medias::whereIn('property_id', $properties->pluck('property_id'))->get();
            $units = Units::whereIn('property_id', $properties->pluck('property_id'))->get();
        }
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        return view('tenant.tenantlandingpage')->with(compact('photos', 'properties','units','username','search'));
    }

    public function display($id,$eid,$eeid,$eeeid,Request $request){
        
        $photos=Medias::find($id);
        $properties=Properties::find($eeid);
        $user=User::find($eeeid);
        $userObj = $request->session()->get("user");
        $username=$userObj->Fullname;
        $units=Units::find($eid);
        $feedbacks = Feedbacks::where('unit_id',$units->unit_id)->get();
        $userIds = $feedbacks->pluck('user_id')->toArray();
        $userdetails = User::whereIn('user_id', $userIds)->get();
        return view('tenant.tenantproductpage')->with(compact('photos', 'properties','units','username','user','feedbacks','userdetails'));
    }

    public function feedback(Request $request,$id){
        $feedback= new Feedbacks;
        $userObj = $request->session()->get("user");
        $userId=$userObj->user_id;
        $feedback->Comment=$request['feedback'];
        $feedback->user_id=$userId;
        $feedback->unit_id=$id;
        $feedback->save();
        return redirect()->back();
    }
    public function bookings($id,Request $request){
        $rents= new Rents;
        $userObj = $request->session()->get("user");
        $userId=$userObj->user_id;
        $rents->tenant_id=$userId;
        $units=Units::find($id);
        $rents->landlord_id=$units->user_id;
        $rents->unit_id=$id;
        $rents->number_of_tenants=$request['number_of_tenants'];
        $checkinDate = $request['checkin'];
        $checkoutDate = $request['checkout'];

        // Convert the dates to the correct format "YYYY-MM-DD"
        $formattedCheckin = date('Y-m-d', strtotime($checkinDate));
        $formattedCheckout = date('Y-m-d', strtotime($checkoutDate));

       // Now assign the formatted dates to the $rents object
        $rents->start_date = $formattedCheckin;
         $rents->end_date = $formattedCheckout;
        $rents->status="Unpaid";
        $rents->save();
        return redirect()->back();

    }
}
