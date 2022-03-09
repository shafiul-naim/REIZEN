<?php

namespace App\Http\Controllers\Admin;
use App\Hotels;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function index(){
        $hotels=Hotels::all();
        $locations = Location::all();
        return view('admin.hotels.hotel',compact('hotels','locations'));
    }
    public function create(){
        $locations = Location::all();
        return view('admin.hotels.create-hotel',compact('locations'));
    }
    public function store(Request $request){
        $hotel=new Hotels();
        $hotel->name=$request->name;
        $hotel->address=$request->address;
        $hotel->location_id=$request->location_id;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $hotel->image = $fileName;
            $request->imageName->move('public/uploads/hotelImages/',$fileName);
          }
        $hotel->website=$request->website;
        $hotel->contact=$request->contact;
        $hotel->details=$request->details;
        $hotel->save();
        return redirect()->to('admin/all-hotel');
    }
    public function update_page($id){
        $hotel= Hotels::find($id);
        $locations = Location::all();
        return view('admin.hotels.update-hotel',compact('hotel','locations'));
    }
    public function update(Request $request){
        $hotel=Hotels::find($request->id);
        $hotel->name=$request->name;
        $hotel->address=$request->address;
        $hotel->location_id=$request->location_id;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/hotelImages/'.$hotel->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $hotel->image = $fileName;
            $request->imageName->move('public/uploads/hotelImages/',$fileName);
        }
        $hotel->website=$request->website;
        $hotel->contact=$request->contact;
        $hotel->details=$request->details;
        $hotel->save();
        return redirect()->to('admin/all-hotel');
    }
    public function delete($id){
        $hotel= Hotels::find($id);
        $path = public_path('uploads/hotelImages/'.$hotel->image);
        if(file_exists($path)){
            unlink($path);
        }
        $hotel->delete();
        return redirect()->back();
    }
}
