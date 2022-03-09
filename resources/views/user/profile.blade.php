@extends('layouts.user_master')
@section('title','Profile')
@section('content')
    <section class="profile-area pb-100">
        <div class="back-img">
            <img src="{{asset('public/user_assets/')}}/images/place/place7.jpg" alt="">
        </div>
        <div class="profile-img">
                {{-- <img id="profile_image"> --}}
            @if ($user->image == 'default.jpg')
                <img src="{{asset('public/image/default.jpg')}}" alt="">
            @else
                <img id="profile_image" src="{{asset('public/uploads/userImages/'.$user->image)}}" alt="">
            @endif
        </div>
    </section>
    <section class="profileform-area pb-100">
         <div class="container">
             <div class="row mt-3">
                 <div class="col-md-4 flex">
                     <div class="blogpost-a text-center">
                        <h2>post your own blog</h2>
                        <div class="blogpost-link">
                            <a href="{{action('User\ProfileController@view')}}" class="btn-common">post blog</a>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-8">
                    <div class="profile-form">
                        <h2>profile</h2>
                        <form action="{{action('User\ProfileController@store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                <input type="text" placeholder="Username" value="{{Auth::user()->name}}">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" value="{{Auth::user()->email}}">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" name="" value="{{Auth::user()->password}}">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" name="imageName" onchange="document.getElementById('profile_image').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-12 text-center">
                                    <textarea name="about" id="" rows="8" cols="20" placeholder="About You.....">{{$user->about}}</textarea>
                                    <input type="submit" value="Update">
                                </div>
                            </div>
                        </form> 
                    </div>
                 </div>
             </div>
         </div>
    </section>
@endsection