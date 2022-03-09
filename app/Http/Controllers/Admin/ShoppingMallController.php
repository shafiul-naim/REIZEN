<?php

namespace App\Http\Controllers\Admin;
use App\ShoppingMalls;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingMallController extends Controller
{
    public function index(){
        $malls=ShoppingMalls::all();
        return view('admin.shoppingMalls.shoppingmall',compact('malls'));
    }
    public function create(){
        return view('admin.shoppingMalls.create-shoppingmall');
    }
    public function store(Request $request){
        $mall=new ShoppingMalls();
        $mall->name=$request->name;
        $mall->address=$request->address;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $mall->image = $fileName;
            $request->imageName->move('public/uploads/mallsImages/',$fileName);
          }
        $mall->contact=$request->contact;  
        $mall->save();
        return redirect()->to('admin/all-mall');
    }
    public function update_page($id){
        $mall= ShoppingMalls::find($id);
        return view('admin.shoppingMalls.update-shoppingmall',compact('mall'));
    }
    public function update(Request $request){
        $mall=ShoppingMalls::find($request->id);
        $mall->name=$request->name;
        $mall->address=$request->address;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/mallsImages/'.$mall->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $mall->image = $fileName;
            $request->imageName->move('public/uploads/mallsImages/',$fileName);
        }
        $mall->contact=$request->contact; 
        $mall->save();
        return redirect()->to('admin/all-mall');
    }
    public function delete($id){
        $mall= ShoppingMalls::find($id);
        $path = public_path('uploads/mallsImages/'.$mall->image);
        if(file_exists($path)){
            unlink($path);
        }
        $mall->delete();
        return redirect()->back();
    }
}
