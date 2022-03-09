<?php

namespace App\Http\Controllers\Admin;
use App\RestaurantMenu;
use App\RestaurentName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantMenuController extends Controller
{
    public function index(){
        $restmenus=RestaurantMenu::all();
        $restnames=RestaurentName::all();
        return view('admin.restaurentMenu.restaurentMenu',compact('restmenus','restnames'));
    }
    public function create(){
        $restnames=RestaurentName::all();
        return view('admin.restaurentMenu.create-restaurentMenu',compact('restnames'));
    }
    public function store(Request $request){
        $restmenu=new RestaurantMenu();
        $restmenu->restaurent_name_id=$request->restaurent_name_id;
        $restmenu->menu_name=$request->menu_name;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $restmenu->image = $fileName;
            $request->imageName->move('public/uploads/restmenuImages/',$fileName);
          }
        $restmenu->price=$request->price;  
        $restmenu->menuType=$request->menuType; 
        $restmenu->save();
        return redirect()->to('admin/all-restmenu');
    }
    public function update_page($id){
        $restmenu=RestaurantMenu::find($id);
        $restmenus=RestaurantMenu::all();
        $restnames=RestaurentName::all();
        return view('admin.restaurentMenu.update-restaurentMenu',compact('restmenu','restmenus','restnames'));
    }
    public function update(Request $request){
        $restmenu=RestaurantMenu::find($request->id);
        $restmenu->restaurent_name_id=$request->restaurent_name_id;
        $restmenu->menu_name=$request->menu_name;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/restmenuImages/'.$restmenu->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $restmenu->image = $fileName;
            $request->imageName->move('public/uploads/restmenuImages/',$fileName);
        }
        $restmenu->price=$request->price; 
        $restmenu->menuType=$request->menuType; 
        $restmenu->save();
        return redirect()->to('admin/all-restmenu');
    }
    public function delete($id){
        $restmenu=RestaurantMenu::find($id);
        $path = public_path('uploads/restmenuImages/'.$restmenu->image);
        if(file_exists($path)){
            unlink($path);
        }
        $restmenu->delete();
        return redirect()->back();
    }
}
