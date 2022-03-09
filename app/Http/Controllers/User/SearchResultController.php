<?php

namespace App\Http\Controllers\User;
use App\Location;
use App\Hotels;
use App\RestaurentName;
use App\TransportCost;
use App\EmergencyContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SearchResultController extends Controller
{
    
    public function formControl(Request $request){
       $keywords = $request->searchKey;
       $result = Location::where('name','like','%'.$keywords)->get();
       return view('user.searchresult',compact('result'));
    }
    
    public function destination($id){
        $loc = Location::find($id);
        $hotels = Hotels::where('location_id',$loc->id)->get();
        $restaurents = RestaurentName::where('location_id',$loc->id)->get();
        $transcosts = TransportCost::where('location_id',$loc->id)->get();
        $emergcon = EmergencyContact::where('location_id',$loc->id)->get();
        $locations = Location::all();
        return view('user.destination',compact('loc','hotels','restaurents','transcosts','emergcon','locations'));
    }


}
