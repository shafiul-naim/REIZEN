@extends('layouts.user_master')
@section('title','Restaurants')
@section('content')

    <!-- restaurants page banner-->

    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/rbanner1.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>Restaurants of Sylhet.</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End restaurants page banner-->

    <section class="restaurants-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center" data-aos="zoom-out-up"
                data-aos-duration="3000">
                    <h2>restaurants.</h2>
                    <h4 class="about-heading">check out amazing restaurants in sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($restaurants as $item)
                    <div class="col-md-4" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="restaurant flex">
                            <div class="restaurant-content">
                                <div class="restaurant-info">
                                    <h3>{{$item->name}}</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                    <a href="{{action('User\RestaurantsController@view',['id'=> $item->id,'slug'=>str_slug($item->name)])}}">read more</a>
                                </div>
                            </div>
                            <img src="{{asset('public/uploads/restnameImages/'.$item->image)}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection