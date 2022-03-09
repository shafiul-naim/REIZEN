<?php

namespace App\Http\Controllers\Admin;
use App\TraditionalAliment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraditionalAlimentController extends Controller
{
    public function index(){
        $tfoods=TraditionalAliment::all();
        return view('admin.traditionalAliment.tradfood',compact('tfoods'));
    }
    public function create(){
        return view('admin.traditionalAliment.create-tradfood');
    }
    public function store(Request $request){
        $tfood=new TraditionalAliment();
        $tfood->name=$request->name;
        $tfood->details=$request->details;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $tfood->image = $fileName;
            $request->imageName->move('public/uploads/tradalimentImages/',$fileName);
          }
        $tfood->save();
        return redirect()->to('admin/all-tfood');
    }
    public function update_page($id){
        $tfood= TraditionalAliment::find($id);
        return view('admin.traditionalAliment.update-tradfood',compact('tfood'));
    }
    public function update(Request $request){
        $tfood=TraditionalAliment::find($request->id);
        $tfood->name=$request->name;
        $tfood->details=$request->details;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/tradalimentImages/'.$tfood->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $tfood->image = $fileName;
            $request->imageName->move('public/uploads/tradalimentImages/',$fileName);
        }
        $tfood->save();
        return redirect()->to('admin/all-tfood');
    }
    public function delete($id){
        $tfood= TraditionalAliment::find($id);
        $path = public_path('uploads/tradalimentImages/'.$tfood->image);
        if(file_exists($path)){
            unlink($path);
        }
        $tfood->delete();
        return redirect()->back();
    }
}
