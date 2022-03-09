@extends('layouts.user_master')
@section('title','Blog')
@section('content')
<section class="blogprofile-area">
    <div class="back-img">
        <img src="{{asset('public/uploads/blogsImages/'.$blog->image)}}"" alt="">
    </div>
    <div class="blogprofile-img">
        <img src="{{asset('public/user_assets/')}}/images/blogprofile.jpg" alt="">
    </div>
    <div class="container">
        <div class="row pt-100 text-center">
            <div class="col-md-12">
                <div class="blogprofile">
                    <h2>blog title: {{$blog->title}}</h2>
                    <div class="flex">
                        <i class="far fa-user"></i><h6>{{$blog->user['name']}}</h6>
                    </div>
                    <h5>published date: <span>{{date('g',strtotime($blog->created_at))}}</span>
                        <span>{{date('M',strtotime($blog->created_at))}}</span>
                        <span>{{date('Y',strtotime($blog->created_at))}}</span></h5>
                </div>
            </div>
            {{-- {{$blog->blogImage}} --}}
        </div>
    </div>
</section>
<section class="details-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="details">
                    <div class="blog-details square-img1">
                        @if (count($blog->blogImage) == 1)
                        <img src="{{asset('public/uploads/blogsImages/'.$blogimage[0]->imageName)}}" alt="">
                        
                        @else
                        <img src="{{asset('public/uploads/blogsImages/'.$blog->image)}}"" alt="">
                        @endif
                        
                    </div>
                    <div class="">
                        <p>{{$blog->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-details square-img2">
                    @if (count($blog->blogImage) == 2)
                        <img src="{{asset('public/uploads/blogsImages/'.$blogimage[1]->imageName)}}" alt="">
                        
                        @else
                        <img src="{{asset('public/uploads/blogsImages/'.$blog->image)}}"" alt="">
                        @endif
                </div>
            </div>
        </div>
        {{-- <div class="row pt-50">
            <hr>
            <div class="col-md-12">
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Comment"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div> --}}
    </div>
</section>
@endsection