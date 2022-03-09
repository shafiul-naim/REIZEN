<?php

namespace App\Http\Controllers\User;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    public function index(){
        $locations = Location::all();
        return view('user.place',compact('locations'));
    }

    public function view($id){
        $location = Location::find($id);
        $locations = Location::all();
        return view('user.singleplace',compact('location','locations'));
    }
}
