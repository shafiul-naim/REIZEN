@extends('layouts.user_master')
@section('title','EmergencyContact')
@section('content')

     <!-- Transport Cost page banner-->
     <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/ecbanner.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>emergency contact of sylhet.</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end Transport Cost page banner-->

    <section class="transportcost-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center">
                    <h2>emergency contact.</h2>
                    <h4 class="about-heading">check out emergency contact of sylhet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-back table-striped">
                            <thead>
                                <tr class="tr-background">
                                    <th scope="col" class="th-color">Place</th>
                                    <th scope="col" class="th-color">Police Station</th>
                                    <th scope="col" class="th-color">Police Station Address</th>
                                    <th scope="col" class="th-color">Number</th>
                                    <th scope="col" class="th-color">Hospital Name</th>
                                    <th scope="col" class="th-color">Hospital Address</th>
                                    <th scope="col" class="th-color">Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emcontacts as $item)
                                    <tr>
                                        <td class="td-color">@if($item->location['name'] == null) N/A @else {{$item->location['name']}} @endif</td>
                                        <td class="td-color">{{$item->name_police}}</td>
                                        <td class="td-color">{{$item->address_police}}</td>
                                        <td class="td-color">{{$item->police}}</td>
                                        <td class="td-color">{{$item->name_hospital}}</td>
                                        <td class="td-color">{{$item->address_hospital}}</td>
                                        <td class="td-color">{{$item->hospital}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

