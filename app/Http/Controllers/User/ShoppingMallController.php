<?php

namespace App\Http\Controllers\User;
use App\ShoppingMalls;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingMallController extends Controller
{
    public function index(){
        $malls=ShoppingMalls::all();
        return view('user.shoppingmall',compact('malls'));
    }
}
