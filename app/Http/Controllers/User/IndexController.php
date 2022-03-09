<?php

namespace App\Http\Controllers\User;
use App\Location;
use App\BlogPost;
use App\BlogImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $places = Location::latest()->paginate(4);
        $blogs = BlogPost::latest()->paginate(3);
        $blogImage = BlogImages::latest()->paginate(3);
        return view('user.index',compact('places','blogs','blogImage'));
    }
}
