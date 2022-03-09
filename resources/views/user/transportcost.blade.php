@extends('layouts.user_master')
@section('title','Transport Cost')
@section('content')

     <!-- Transport Cost page banner-->
     <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/tcbanner.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-text text-center">
                        <h2>transport cost of sylhet.</h2>
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
                    <h2>transport cost.</h2>
                    <h4 class="about-heading">check out transport cost of sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($transcategories as $item)
                    <div class="col-md-6 mb-3">
                        <h2 class="text-center">{{$item->category}}</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-back table-striped">
                                <thead>
                                    <tr class="tr-background">
                                        <th scope="col" class="th-color">From</th>
                                        <th scope="col" class="th-color">To</th>
                                        <th scope="col" class="th-color">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item->transportcost as $row)
                                        <tr>
                                            <td class="td-color">{{$row->from}}</td>
                                            <td class="td-color">{{$row->to}}</td>
                                            <td class="td-color">{{money($row->price)}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection