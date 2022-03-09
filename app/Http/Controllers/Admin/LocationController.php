<?php

namespace App\Http\Controllers\Admin;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::all();
        return view('admin.locations.location',compact('locations'));
    }
    public function create(){
        return view('admin.locations.create-location');
    }
    public function store(Request $request){
        $location=new Location();
        $location->name=$request->name;   
        $location->address=$request->address;  
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $location->image = $fileName;
            $request->imageName->move('public/uploads/locationImages/',$fileName);
          }
        $location->save();
        return redirect()->to('admin/all-location'); 
    }
    public function update_page($id){
        $location = Location::find($id);
        return view('admin.locations.update-location',compact('location'));
    }
    public function update(Request $request){
        $location=Location::find($request->id);
        $location->name=$request->name;   
        $location->address=$request->address;  
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/locationImages/'.$location->image);
            if(file_exists($path)){
              unlink($path);
          }
  
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $location->image = $fileName;
            $request->imageName->move('public/uploads/locationImages/',$fileName);
        }
        $location->save();
        return redirect()->to('admin/all-location'); 
    }
    public function delete($id){
        $location = Location::find($id); 
        $path = public_path('uploads/locationImages/'.$location->image);
        if(file_exists($path)){
            unlink($path);
        }
        $location->delete();
        return redirect()->back();
    }
}
