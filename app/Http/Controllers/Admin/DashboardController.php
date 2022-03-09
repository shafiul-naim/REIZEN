<?php

namespace App\Http\Controllers\Admin;
use App\Location;
use App\Hotels;
use App\RestaurentName;
use App\RestaurantMenu;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $locations = Location::latest()->paginate(4);
        $hotels = Hotels::latest()->paginate(4);
        $restnames = RestaurentName::latest()->paginate(4);
        $restmenus = RestaurantMenu::latest()->paginate(4);
        $users = User::latest()->paginate(4);
        return view('admin.dashboard',compact('locations','hotels','restnames','restmenus','users'));
    }
}
