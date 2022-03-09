<?php

namespace App\Http\Controllers\Admin;
use App\BlogPost;
use App\BlogImages;
use App\BlogCategory;
use App\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    public function index(){
        $blogposts = BlogPost::all();
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blogPost.blogPost',compact('blogposts','blogcategories'));
    }
    public function create(){
      $blogcategories = BlogCategory::all();
      return view('admin.blogs.blogPost.create-blogPost',compact('blogcategories'));
    }
    public function store(Request $request){
      //dd($request->all());
        $blogpost=new BlogPost();
        $blogpost->title=$request->title;
        $blogpost->description=$request->description;
        $blogpost->blog_category_id=$request->blog_category_id;
        $blogpost->user_id = Auth::user()->id;
        //image upload
        if($request->hasFile('imageName')){
          $extension = $request->imageName->extension();
          $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
          $fileName = $fileName.'.'.$extension;
          $blogpost->image = $fileName;

          $request->imageName->move('public/uploads/blogsImages/',$fileName);
        }
        $blogpost->save();
        $blogID = $blogpost->id;

        $images = $request->file('images');
        if ($request->hasFile('images')){
          foreach($images as $image){
            $extension1 = $image->extension();
            $filename1 = rand(123456,999999).'.'.$extension1;
            $image->move('public/uploads/blogsImages/',$filename1);

            $blogImage = new BlogImages();
            $blogImage->blog_post_id = $blogID;
            $blogImage->imageName = $filename1;
            $blogImage->save();
          }
        }
        return redirect()->to('admin/all-blogpost');
      }
    public function update_page($id){
      $blogpost = BlogPost::find($id);
      $blogcategories = BlogCategory::all();
      return view('admin.blogs.blogPost.update-blogPost',compact('blogpost','blogcategories'));
    } 
    public function update(Request $request){
        $blogpost=BlogPost::find($request->id);
        $blogpost->title=$request->title;
        $blogpost->description=$request->description;
        $blogpost->blog_category_id=$request->blog_category_id;
        if($request->hasFile('imageName')){  
          $path = public_path('uploads/blogsImages/'.$blogpost->image);
        if(file_exists($path)){
          unlink($path);
        }

          $extension = $request->imageName->extension();
          $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
          $fileName = $fileName.'.'.$extension;
          $blogpost->image = $fileName;

          $request->imageName->move('public/uploads/blogsImages/',$fileName);
      }
        $blogpost->save();
        return redirect()->to('admin/all-blogpost');
    } 
    public function delete($id){
      $blogpost=BlogPost::find($id);
      $path = public_path('uploads/blogsImages/'.$blogpost->image);
        if(file_exists($path)){
            unlink($path);
        }
      $blogpost->delete();
      return redirect()->back();
    }
}
