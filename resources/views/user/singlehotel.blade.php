@extends('layouts.user_master')
@section('title','SingleHotel')
@section('content')
    <section class="singlehotel-area pb-100">
        <img src="{{asset('public/uploads/hotelImages/' .$hotel->image)}}" alt="">
        <div class="banner-text bg text-center pt-10 pb-10">
            <h2>welcome to the {{$hotel->name}}.</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-50 about-title text-center">
                   <h2>{{$hotel->name}}</h2> 
                </div>
                <div class="col-md-4 text-center single-hotel">
                    <i class="fas fa-map-marked-alt"></i>
                    <span class="hotel-awc">address</span>
                    <div class="row">
                        <div class="single-hotel-col col-md-12 ">
                            <h4>{{$hotel->address}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center single-hotel">
                    <i class="fas fa-globe-europe"></i>
                    <span class="hotel-awc">website</span>
                    <div class="row">
                        <div class="col-md-12 single-hotel-col">
                            <a href="#">{{$hotel->website}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center single-hotel">
                    <i class="fas fa-address-book"></i>
                    <span class="hotel-awc">contact</span>
                    <div class="row">
                        <div class="col-md-12 single-hotel-col">
                            <a href="#">{{$hotel->contact}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Details section -->

    <section class="details-area pb-100">
        <div class="container">
            <div class="details pt-100">
                <div class="single-details circle-img">
                    <img src="{{asset('public/user_assets/')}}/images/hotel/details2.jpg" alt="">
                </div>
                <div class="single-details circle-img1">
                    <img src="{{asset('public/user_assets/')}}/images/hotel/details1.jpg" alt="">
                </div>
                <div class="">
                    <h2>hotel details</h2>
                    <p>{{$hotel->details}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End Details section -->

@endsection