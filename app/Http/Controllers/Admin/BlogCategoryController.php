<?php

namespace App\Http\Controllers\Admin;
use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public function index(){
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blogCategory.blogCategory',compact('blogcategories'));
    }
    public function create(){
        return view('admin.blogs.blogCategory.create-blogCategory');
    }
    public function store(Request $request){
      $blogcategory=new BlogCategory();  
      $blogcategory->name=$request->name;
      $blogcategory->slug = str_slug($request->name,'_');
      $blogcategory->save();
      return redirect()->to('admin/all-blogcategory');
    }
    public function update_page($id){
        $blogcategory=BlogCategory::find($id);
        return view('admin.blogs.blogCategory.update-blogCategory',compact('blogcategory'));
    }
    public function update(Request $request){
        $blogcategory=BlogCategory::find($request->id);
        $blogcategory->name=$request->name;
        $blogcategory->slug=str_slug($request->name,'_');
        $blogcategory->save();
        return redirect()->to('admin/all-blogcategory');
      }
    public function delete($id){
      $blogcategory=BlogCategory::find($id);
      $blogcategory->delete();
      return redirect()->back(); 
    }

}
