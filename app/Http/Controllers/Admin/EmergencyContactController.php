<?php

namespace App\Http\Controllers\Admin;
use App\EmergencyContact;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmergencyContactController extends Controller
{
    public function index(){
        $emcontacts=EmergencyContact::all();
        $locations = Location::all();
        return view('admin.emergencyContact.emergencyContact',compact('emcontacts','locations'));
    }
    public function create(){
        $locations = Location::all();
        return view('admin.emergencyContact.create-emergencyContact',compact('locations'));
    }
    public function store(Request $request){
        $emcontact=new EmergencyContact();
        $emcontact->location_id=$request->location_id;
        $emcontact->name_police=$request->name_police;
        $emcontact->address_police=$request->address_police;
        $emcontact->police=$request->police;
        $emcontact->name_hospital=$request->name_hospital;
        $emcontact->address_hospital=$request->address_hospital;
        $emcontact->hospital=$request->hospital; 
        $emcontact->save();
        return redirect()->to('admin/all-emcontact');
    }
    public function update_page($id){
        $emcontact= EmergencyContact::find($id);
        $locations = Location::all();
        return view('admin.emergencyContact.update-emergencyContact',compact('emcontact','locations'));
    }
    public function update(Request $request){
        $emcontact=EmergencyContact::find($request->id);
        $emcontact->location_id=$request->location_id;
        $emcontact->name_police=$request->name_police;
        $emcontact->address_police=$request->address_police;
        $emcontact->police=$request->police;
        $emcontact->name_hospital=$request->name_hospital;
        $emcontact->address_hospital=$request->address_hospital;
        $emcontact->hospital=$request->hospital; 
        $emcontact->save();
        return redirect()->to('admin/all-emcontact');
    }
    public function delete($id){
        $emcontact= EmergencyContact::find($id);
        $emcontact->delete();
        return redirect()->back();
    }
}
