<?php

namespace App\Http\Controllers\Admin;
use App\FamousClothes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamousClothController extends Controller
{
    public function index(){
        $fclothes=FamousClothes::all();
        return view('admin.famousCloths.fcloth',compact('fclothes'));
    }
    public function create(){
        return view('admin.famousCloths.create-fcloth');
    }
    public function store(Request $request){
        $fcloth=new FamousClothes();
        $fcloth->name=$request->name;
        $fcloth->details=$request->details;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $fcloth->image = $fileName;
            $request->imageName->move('public/uploads/fclothImages/',$fileName);
          }
        $fcloth->save();
        return redirect()->to('admin/all-fcloth');
    }
    public function update_page($id){
        $fcloth= FamousClothes::find($id);
        return view('admin.famousCloths.update-fcloth',compact('fcloth'));
    }
    public function update(Request $request){
        $fcloth=FamousClothes::find($request->id);
        $fcloth->name=$request->name;
        $fcloth->details=$request->details;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/fclothImages/'.$fcloth->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $fcloth->image = $fileName;
            $request->imageName->move('public/uploads/fclothImages/',$fileName);
        }
        $fcloth->save();
        return redirect()->to('admin/all-fcloth');
    }
    public function delete($id){
        $fcloth= FamousClothes::find($id);
        $path = public_path('uploads/fclothImages/'.$fcloth->image);
        if(file_exists($path)){
            unlink($path);
        }
        $fcloth->delete();
        return redirect()->back();
    }
}
