<?php

namespace App\Http\Controllers\User;
use App\GroceryShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroceryShopController extends Controller
{
    public function index(){
        $groceries=GroceryShop::all();
        return view('user.groceryshop',compact('groceries'));
    }
}
