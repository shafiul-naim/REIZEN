<?php

namespace App\Http\Controllers\User;
use App\EmergencyContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmergencyContactController extends Controller
{
    public function index(){
        $emcontacts=EmergencyContact::all();
        return view('user.emergencycontact',compact('emcontacts'));
    }
}
