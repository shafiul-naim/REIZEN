<?php

namespace App\Http\Controllers\User;
use App\Hotels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{
    public function index(){
        $hotels=Hotels::all();
        return view('user.hotels',compact('hotels'));
    }

    public function view($id){
        $hotel= Hotels::find($id);
        return view('user.singlehotel',compact('hotel'));
    }
}
