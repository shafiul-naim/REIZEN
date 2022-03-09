<?php

namespace App\Http\Controllers\User;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\BlogCategory;
use App\BlogPost;
use App\BlogImages;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        return view('user.profile',compact('user'));
    }
    
    public function store(Request $request){
        $user = User::find(Auth::user()->id);    
        $user->name = Auth::user()->name;      
        $user->email = Auth::user()->email;
        $user->password = Auth::user()->password; 
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
        return redirect()->to('user/profile');
    }

    public function view(){
        $blogcategories = BlogCategory::all();
        return view('user.blogpost',compact('blogcategories'));
    }

    public function storeblog(Request $request){
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
        Session::flash('submitblog','Blog posted Successfully!');
        return redirect()->back();
    }
}
