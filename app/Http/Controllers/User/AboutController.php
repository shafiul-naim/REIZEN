<?php

namespace App\Http\Controllers\User;
use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $abouts=About::all();
        return view('user.about',compact('abouts'));
    }
}
