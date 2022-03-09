@extends('layouts.user_master')
@section('title','Blogpost')
@section('content')
    <section class="profile-area pb-100">
        <div class="back-img">
            <img src="{{asset('public/user_assets/')}}/images/place/place7.jpg" alt="">
        </div>
        <div class="profile-img">
            <img src="{{asset('public/user_assets/')}}/images/profile.jpg" alt="">
        </div>
    </section>
    <section class="blogpost-area pb-100">
        <div class="container">
            {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif --}}
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="profile-form">
                           <h2>Blogpost</h2>
                           <div class="row text-center">
                               <div class="col-md-8">
                                   <form action="{{action('User\ProfileController@storeblog')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="text" placeholder="Blog title" name="title">
                                        <select name="blog_category_id" class="place">
                                            <option value=""> Select a BlogCategory </option>
                                            @foreach ($blogcategories as $blogcategory)
                                            <option value="{{$blogcategory->id}}"> {{$blogcategory->name}} </option> 
                                            @endforeach
                                        </select>
                                        <textarea cols="30" rows="10" placeholder="Blog Details....." name="description"></textarea>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="file" name="imageName" onchange="document.getElementById('blog_image').src = window.URL.createObjectURL(this.files[0])" >
                                                <img id="blog_image" style="border: 1px solid #000; margin-top:10px;width:100%; height:200px">
                                                <hr>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" name="images[]" onchange="document.getElementById('blog_image1').src = window.URL.createObjectURL(this.files[0])" >
                                                <img id="blog_image1" style="border: 1px solid #000; margin-top:10px;width:100%; height:200px">
                                                <hr>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" name="images[]" onchange="document.getElementById('blog_image2').src = window.URL.createObjectURL(this.files[0])" >
                                                <img id="blog_image2" style="border: 1px solid #000; margin-top:10px;width:100%; height:200px">
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" value="Post">
                                            </div>
                                        </div>
                                   </form>
                               </div>
                               <div class="col-md-4 mt-3 flex">
                                    <div class="blogpost-a text-center">
                                        <h2>profile</h2>
                                        <div class="blogpost-link">
                                            <a href="{{action('User\ProfileController@index')}}" class="btn-common">view</a>
                                        </div>
                                    </div>
                               </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (Session::has('submitblog'))
        <script>
            swal("Good Job!", "Blog Posted Successfully!", "success");
        </script>
    @endif
@endsection