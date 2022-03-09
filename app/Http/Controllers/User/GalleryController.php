<?php

namespace App\Http\Controllers\User;
use App\BlogImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        $blogimages = BlogImages::all();
        return view('user.gallery',compact('blogimages'));
    }
}
