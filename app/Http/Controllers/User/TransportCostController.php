<?php

namespace App\Http\Controllers\User;
use App\TransportCost;
use App\TransportCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportCostController extends Controller
{
    public function index(){
        //$transcosts = TransportCost::all();
        $transcategories = TransportCategory::all();
        return view('user.transportcost',compact('transcategories'));
    }
}
