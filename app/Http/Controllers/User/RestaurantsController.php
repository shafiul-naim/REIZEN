<?php

namespace App\Http\Controllers\User;
use App\RestaurentName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantsController extends Controller
{
    public function index(){
        $restaurants = RestaurentName::all();
        return view('user.restaurants',compact('restaurants'));
    }

    public function view($id){
       $restaurant = RestaurentName::find($id);
       return view('user.singlerestaurant',compact('restaurant'));
    }
}
