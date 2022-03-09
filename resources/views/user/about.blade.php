@extends('layouts.user_master')
@section('title','About')
@section('content')
    <!-- about page banner-->

    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/ab3.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>our organizations rule.</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about page banner-->

    <!--about us-->  

    <section class="about-area pt-50">
        <div class="section-title">
            <div class="container">
                <div class="row pt-50">
                    <div class="col-md-12 about-title text-center" data-aos="fade-up"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <h2> about us.</h2>
                        <h4 class="about-heading">WE'RE MORE THAN A DIGITAL AGENCY</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="about-area1 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aboutpage">
                            <div class="layer1"></div>
                            <div class="layer2"></div>
                            <div class="aboutpage-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}
    <section class="value-area pb-100">
            <div class="container">
                @foreach ($abouts as $item)
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="value who row">
                                <div class="value-img col-md-6">
                                    <img src="{{asset('public/uploads/aboutImages/'.$item->whoimage)}}" alt="">
                                </div>
                                <div class="value-content col-md-6">
                                    <h3>{{$item->whoname}}</h3>
                                    <p>{{$item->whodetails}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="value philosophy row">
                                <div class="value-img col-md-6">
                                    <img src="{{asset('public/uploads/aboutImages/'.$item->ourimage)}}" alt="">
                                </div>
                                <div class="value-content col-md-6">
                                    <h3>{{$item->ourname}}</h3>
                                    <p>{{$item->ourdetails}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-left"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="value how row">
                                <div class="value-img col-md-6">
                                    <img src="{{asset('public/uploads/aboutImages/'.$item->howimage)}}" alt="">
                                </div>
                                <div class="value-content col-md-6">
                                    <h3>{{$item->howname}}</h3>
                                    <p>{{$item->howdetails}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>  

    <!-- end about us-->  
@endsection