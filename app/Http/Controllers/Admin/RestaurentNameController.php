<?php

namespace App\Http\Controllers\Admin;
use App\RestaurentName;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurentNameController extends Controller
{
    public function index(){
        $restnames=RestaurentName::all();
        $locations = Location::all();
        return view('admin.restaurentName.restaurentName',compact('restnames','locations'));
    }
    public function create(){
        $locations = Location::all();
        return view('admin.restaurentName.create-restaurentName',compact('locations'));
    }
    public function store(Request $request){
        $restname=new RestaurentName();
        $restname->name=$request->name;
        $restname->address=$request->address;
        $restname->location_id=$request->location_id;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $restname->image = $fileName;
            $request->imageName->move('public/uploads/restnameImages/',$fileName);
          }
        $restname->contact=$request->contact;  
        $restname->save();
        return redirect()->to('admin/all-restname');
    }
    public function update_page($id){
        $restname= RestaurentName::find($id);
        $locations = Location::all();
        return view('admin.restaurentName.update-restaurentName',compact('restname','locations'));
    }
    public function update(Request $request){
        $restname=RestaurentName::find($request->id);
        $restname->name=$request->name;
        $restname->address=$request->address;
        $restname->location_id=$request->location_id;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/restnameImages/'.$restname->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $restname->image = $fileName;
            $request->imageName->move('public/uploads/restnameImages/',$fileName);
        }
        $restname->contact=$request->contact; 
        $restname->save();
        return redirect()->to('admin/all-restname');
    }
    public function delete($id){
        $restname= RestaurentName::find($id);
        $path = public_path('uploads/restnameImages/'.$restname->image);
        if(file_exists($path)){
            unlink($path);
        }
        $restname->delete();
        return redirect()->back();
    }
}
