<?php

namespace App\Http\Controllers\User;
use App\FamousClothes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamousAttireController extends Controller
{
    public function index(){
        $fclothes=FamousClothes::all();
        return view('user.famousattire',compact('fclothes'));
    }
}
