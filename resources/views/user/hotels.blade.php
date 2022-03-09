@extends('layouts.user_master')
@section('title','Hotel')    
@section('content')
    <!-- hotels page banner-->
    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/hbanner.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>hotels of sylhet.</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end hotels page banner-->

    <!---- hotels page value-->

    <section class="hotel-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2>hotels.</h2>
                    <h4 class="about-heading">check out hotels of in sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($hotels as $item)
                    <div class="col-md-4" data-aos="zoom-in-up"
                    data-aos-duration="2000">
                        <a href="{{action('User\HotelsController@view',['id'=> $item->id,'slug'=>str_slug($item->name)])}}">
                            <div class="hotelspage">
                                <img src="{{asset('public/uploads/hotelImages/'.$item->image)}}" alt="">
                                <div class="hotel-overlay"><i class="fas fa-search-location"></i></div>
                                <div class="hotelspage-content">
                                    <div class="hotelspageinfo text-center">
                                        <h2>{{$item->name}}</h2> 
                                        <i class="fas fa-map-marked-alt"></i>
                                        <span>{{$item->address}}</span>
                                    </div>
                                </div> 
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!---- end hotels page value-->
@endsection