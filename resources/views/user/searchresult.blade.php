@extends('layouts.user_master')
@section('title','Search Place')
@section('content')

    <section class="banner-area bg pb-100" style="background: url('{{asset('public/user_assets/')}}/images/ab3.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>search result of place.</h2>
                        <p>the result is matched or not</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serchresult-area pt-50 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center">
                    <h2>search result of place.</h2>
                    <h4 class="about-heading">check out marvelous place of sylhet</h4>
                </div>
            </div>
            <div class="row">
               @if (count($result) > 0)
                    @foreach ($result as $item)
                            <div class="col-md-6 text-center">
                                <a href="{{action('User\SearchResultController@destination',['id' => $item->id,'slug' => str_slug($item->name)])}}" class="search-result">
                                    <div class="resultBox">
                                        <div class="result-img">
                                        <img src="{{asset('public/uploads/locationImages/'.$item->image)}}" alt="">
                                        </div>
                                        <div class="result-content">
                                            <h4>{{$item->name}}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    @endforeach
                @else
                <h2 class="text-danger"> place do not found</h2>
               @endif
            </div>
        </div>
    </section>

@endsection