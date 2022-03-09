<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.user',compact('users'));
    }
    public function store(Request $request){
        $user = new User();
        $user->user_id = Auth::user()->id;      
        $user->name = Auth::user()->name;      
        $user->email = Auth::user()->email; 
        $user->userType = $request->userType;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $user->image = $fileName;
            $request->imageName->move('public/uploads/userImages/',$fileName);
        }   
        $user->about = $request->about;  
        $user->save();
        return redirect()->to('admin/all-user');
    }
    public function update_page($id){
        $user= User::find($id);
        $users = User::all();
        return view('admin.users.update-user',compact('user','users'));
    }
    public function update(Request $request){
        $user= User::find($request->id);
        $user->user_id = Auth::user()->id;      
        $user->name = Auth::user()->name;      
        $user->email = Auth::user()->email; 
        $user->userType = $request->userType;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/userImages/'.$user->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $user->image = $fileName;
            $request->imageName->move('public/uploads/userImages/',$fileName);
        }
        $user->about = $request->about;
        $user->save();
        return redirect()->to('admin/all-user');
    }
}
