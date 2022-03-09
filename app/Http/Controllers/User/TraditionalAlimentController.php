<?php

namespace App\Http\Controllers\User;
use App\TraditionalAliment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraditionalAlimentController extends Controller
{
    public function index(){
        $tfoods=TraditionalAliment::all();
        return view('user.traditionalaliment',compact('tfoods'));
    }
}
