@extends('layouts.user_master')
@section('title','Gallery')    
@section('content')
    <!-- gallery page banner-->

    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/gbanner3.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>our roaming gallery.</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end gallery page banner-->

    <!---- gallery page value-->

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2>gallery.</h2>
                    <h4 class="about-heading">check out amazing gallery of places in sylhet</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        @foreach ($blogimages as $item)
                            <div class="grid-item" data-aos="zoom-in-up"
                            data-aos-duration="2000">
                                <a href="{{asset('public/uploads/blogsImages/'.$item->imageName)}}"  data-lightbox="mygallery"><img src="{{asset('public/uploads/blogsImages/'.$item->imageName)}}" alt=""></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var grid = document.querySelector('.grid');
        var msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
        });
    </script>

    <!---- end gallery page value-->

@endsection

    
    

    