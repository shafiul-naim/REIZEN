<?php

namespace App\Http\Controllers\Admin;
use App\GroceryShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroceryShopController extends Controller
{
    public function index(){
        $groceries=GroceryShop::all();
        return view('admin.groceryShop.groceryshop',compact('groceries'));
    }
    public function create(){
        return view('admin.GroceryShop.create-groceryshop');
    }
    public function store(Request $request){
        $grocery=new GroceryShop();
        $grocery->name=$request->name;
        $grocery->address=$request->address;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $grocery->image = $fileName;
            $request->imageName->move('public/uploads/groceryImages/',$fileName);
          }
        $grocery->contact=$request->contact;  
        $grocery->save();
        return redirect()->to('admin/all-grocery');
    }
    public function update_page($id){
        $grocery= GroceryShop::find($id);
        return view('admin.GroceryShop.update-groceryshop',compact('grocery'));
    }
    public function update(Request $request){
        $grocery=GroceryShop::find($request->id);
        $grocery->name=$request->name;
        $grocery->address=$request->address;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/groceryImages/'.$grocery->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $grocery->image = $fileName;
            $request->imageName->move('public/uploads/groceryImages/',$fileName);
        }
        $grocery->contact=$request->contact; 
        $grocery->save();
        return redirect()->to('admin/all-grocery');
    }
    public function delete($id){
        $grocery= GroceryShop::find($id);
        $path = public_path('uploads/groceryImages/'.$grocery->image);
        if(file_exists($path)){
            unlink($path);
        }
        $grocery->delete();
        return redirect()->back();
    }
}
