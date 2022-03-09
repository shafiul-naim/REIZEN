<?php

namespace App\Http\Controllers\Admin;
use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $abouts=About::all();
        return view('admin.about.about',compact('abouts'));
    }
    public function create(){
        return view('admin.about.create-about');
    }
    public function store(Request $request){
        $about=new About();
        $about->whoname=$request->whoname;
        $about->whodetails = $request->whodetails;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->whoname,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $about->whoimage = $fileName;
            $request->imageName->move('public/uploads/aboutImages/',$fileName);
        }
        $about->ourname=$request->ourname;
        $about->ourdetails = $request->ourdetails;
        if($request->hasFile('imageName1')){
            $extension1 = $request->imageName1->extension();
            $fileName1 = str_slug($request->ourname,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName1 = $fileName1.'.'.$extension1;
            $about->ourimage = $fileName1;
            $request->imageName1->move('public/uploads/aboutImages/',$fileName1);
        }
        $about->howname=$request->howname;
        $about->howdetails = $request->howdetails;
        if($request->hasFile('imageName2')){
            $extension2 = $request->imageName2->extension();
            $fileName2 = str_slug($request->howname,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName2 = $fileName2.'.'.$extension2;
            $about->howimage = $fileName2;
            $request->imageName2->move('public/uploads/aboutImages/',$fileName2);
        }
        $about->save();
        return redirect()->to('admin/all-about');
    }
    public function update_page($id){
        $about= About::find($id);
        return view('admin.about.update-about',compact('about'));
    }
    public function update(Request $request){
        $about=About::find($request->id);
        $about->whoname=$request->whoname;
        $about->whodetails=$request->whodetails;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/aboutImages/'.$about->whoimage);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->whoname,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $about->whoimage = $fileName;
            $request->imageName->move('public/uploads/aboutImages/',$fileName);
        }
        $about->ourname=$request->ourname;
        $about->ourdetails=$request->ourdetails;
        if($request->hasFile('imageName1')){  
            $path = public_path('uploads/aboutImages/'.$about->ourimage);
          if(file_exists($path)){
            unlink($path);
          }
            $extension1 = $request->imageName1->extension();
            $fileName1 = str_slug($request->ourname,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName1 = $fileName1.'.'.$extension1;
            $about->ourimage = $fileName1;
            $request->imageName1->move('public/uploads/aboutImages/',$fileName1);
        }
        $about->howname=$request->howname;
        $about->howdetails=$request->howdetails;
        if($request->hasFile('imageName2')){  
            $path = public_path('uploads/aboutImages/'.$about->howimage);
          if(file_exists($path)){
            unlink($path);
          }
            $extension2 = $request->imageName2->extension();
            $fileName2 = str_slug($request->howname,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName2 = $fileName2.'.'.$extension2;
            $about->howimage = $fileName2;
            $request->imageName2->move('public/uploads/aboutImages/',$fileName2);
        }
        $about->save();
        return redirect()->to('admin/all-about');
    }
    public function delete($id){
        $about= About::find($id);
        $path = public_path('uploads/aboutImages/'.$about->whoimage);
        $path = public_path('uploads/aboutImages/'.$about->ourimage);
        $path = public_path('uploads/aboutImages/'.$about->howimage);
        if(file_exists($path)){
            unlink($path);
        }
        $about->delete();
        return redirect()->back();
    }
}
