<?php

namespace App\Http\Controllers\Admin;
use App\TransportCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportCategoryController extends Controller
{
    public function index(){
        $transcategories = TransportCategory::all();
        return view('admin.transport.transportCategory.transportCategory',compact('transcategories'));
    }
    public function create(){
        return view('admin.transport.transportCategory.create-transportCategory');
    }
    public function store(Request $request){
      $transcategory=new TransportCategory();
      $transcategory->category=$request->category;
      $transcategory->save();
      return redirect()->to('admin/all-transcategory');
    }
    public function update_page($id){
        $transcategory=TransportCategory::find($id);
        return view('admin.transport.transportCategory.update-transportCategory',compact('transcategory'));
    }
    public function update(Request $request){
        $transcategory=TransportCategory::find($request->id);
        $transcategory->category=$request->category;
        $transcategory->save();
        return redirect()->to('admin/all-transcategory');
      }
    public function delete($id){
      $transcategory=TransportCategory::find($id);
      $transcategory->delete();
      return redirect()->back(); 
    }
}
