@extends('layouts.user_master')
@section('title','Home')
@section('content')
  <!--homepage banner area-->
    
    <section class="welcome-area cover">
            <div class="welcome container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-text text-center">
                            <h2>welcome to the sylhet <span class="animate"></span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

  <!-- end homepage banner area-->
   
  {{-- <!--homepage destination-->
 
    <section class="destinaton-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 destinationform">
                    <div class="destination">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>from</h4>
                                    <input type="text" placeholder="Current Position">
                                </div>
                                <div class="col-md-4">
                                    <h4>to</h4>
                                    <input type="text" placeholder="Destination">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" value="search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- end homepage destination--> --}}

  <!--homepage about us-->

    <section class="about-area pt-100">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 about-title" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2> about us.</h2>
                    <h4 class="about-heading">WE'RE MORE THAN A DIGITAL AGENCY</h4>
                </div>
                <div class="col-md-6 text-right about-content" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                </div>
            </div>
        </div>   
    </section>

    <section class="about-area1 pb-100">
            <div class="container">       
                <div class="about row">
                        <div class="col-md-4" data-aos="fade-up"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="who-we">
                                <div class="about-icon"><i class="far fa-question-circle"></i></div>
                                <div class="single-about">
                                    <h4>Who we are</h4>
                                    <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quae similique explicabo sed, fuga eius nostrum! Illo delectus distinctio temporibus.</p>
                                    <a href="{{action('User\AboutController@index')}}" class="btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="our-phi">
                                <div class="about-icon"><i class="fab fa-think-peaks"></i></div>
                                <div class="single-about">
                                    
                                    <h4>Our philosophy</h4>
                                    <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quae similique explicabo sed, fuga eius nostrum! Illo delectus distinctio temporibus.</p>
                                    <a href="{{action('User\AboutController@index')}}" class="btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="how-we">
                                <div class="about-icon"><i class="fas fa-network-wired"></i></div>
                                <div class="single-about">
                                    
                                    <h4>How we work</h4>
                                    <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quae similique explicabo sed, fuga eius nostrum! Illo delectus distinctio temporibus.</p>
                                    <a href="{{action('User\AboutController@index')}}" class="btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                </div>    
            </div>
    </section>

   <!-- end homepage about us-->

   <!--homepage visit place-->

    <section class="place-area pb-100">
        <div class="">
            <div class="container">
                <div class="row section-title">
                    <div class="col-md-12 about-title text-center pt-50" data-aos="fade-up"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <h2>places to visit.</h2>
                        <h4 class="about-heading">check out amazing places of sylhet</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($places as $item)
                        <div class="col-md-3" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                            <div class="place-card flex">
                                <div class="place-img">
                                    <img src="{{asset('public/uploads/locationImages/'.$item->image)}}" alt="">
                                </div>
                                <div class="place-content text-center">
                                    <h3>{{$item->name}}</h3>
                                    <a href="{{action('User\PlaceController@view',['id'=> $item->id,'slug'=>str_slug($item->name)])}}">
                                        <i class="fas fa-location-arrow"></i>
                                        <span>{{$item->address}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

   <!--end homepage visit place-->

   <!--service part-->

    <section class="service-area pb-100">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 about-title" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2> services.</h2>
                    <h4 class="about-heading">services we provide</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\HotelsController@index')}}">
                        <div class="services">
                            <i class="fas fa-hotel"></i>
                            <h3 class="title">hotels</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\RestaurantsController@index')}}">
                        <div class="services">
                            <i class="fas fa-utensils"></i>
                            <h3 class="title">restaurants</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\PlaceController@index')}}">
                        <div class="services">
                            <i class="fas fa-mountain"></i>
                            <h3 class="title">tourists attraction</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\TransportCostController@index')}}">
                        <div class="services">
                            <i class="fas fa-car-side"></i>
                            <h3 class="title">transport cost</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\ShoppingMallController@index')}}">
                        <div class="services">
                            <i class="fas fa-store"></i>
                            <h3 class="title">shopping mall</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\EmergencyContactController@index')}}">
                        <div class="services">
                            <i class="far fa-hospital"></i>
                            <h3 class="title">emergency contacts</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\FamousAttireController@index')}}">
                        <div class="services">
                                <i class="fas fa-tshirt"></i>
                                <h3 class="title">famous attire</h3>
                                <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\TraditionalAlimentController@index')}}">
                        <div class="services">
                            <i class="fas fa-coffee"></i>
                            <h3 class="title">traditional aliment</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <a href="{{action('User\GroceryShopController@index')}}">
                        <div class="services">
                            <i class="fas fa-shopping-cart"></i>
                            <h3 class="title">grocery shops</h3>
                            <div class="hidden-icon"><i class="fas fa-hand-point-right"></i></div>
                        </div>
                    </a>
                </div>
            </div>    
        </div>
    </section>

   <!-- end service part-->

   <!-- homepage gallery-->

    <section class="gallery-area pb-100">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-12 pt-50 about-title text-center" data-aos="fade-up"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2>exclusive gallery.</h2>
                    <h4 class="about-heading">check out amazing gallery of places in sylhet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="grid">
                        @foreach ($blogImage as $item)
                            <div class="grid-sizer"></div>
                            <div class="grid-item" data-aos="zoom-in-up"
                            data-aos-duration="3000">
                                <a href="{{asset('public/uploads/blogsImages/'.$item->imageName)}}" data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/uploads/blogsImages/'.$item->imageName)}}"/></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!--end homepage gallery-->

   <!-- homepage blog-->

   
    <section class="blog-area pb-100" >
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-12 col-md-6 about-title" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2> latest blogs.</h2>
                    <h4 class="about-heading">learn more through our latest blog</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-sm-12 col-md-4" data-aos="fade-up"
                    data-aos-duration="3000">
                        <div class="blog">
                            <div class="blog-img">
                                <img src="{{asset('public/uploads/blogsImages/'.$item->image)}}" alt="">
                                <div class="blog-date text-center">
                                    <span>{{date('g',strtotime($item->created_at))}}</span>
                                    <span>{{date('M',strtotime($item->created_at))}}</span>
                                    <span>{{date('Y',strtotime($item->created_at))}}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h2>{{$item->title}}</h2>
                                <span><i class="far fa-user"></i><h6>{{$item->user['name']}}</h6></span>
                                <p>{{str_limit($item->description,150,'....')}}</p>
                                <a href="{{action('User\BlogController@view',['id'=> $item->id,'slug'=>str_slug($item->title)])}}" class="btn-common">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>  
  
    <!-- end homepage blog-->
   
    <!-- Start Type JS-->
<script type="text/javascript">
    var typed = new Typed('.animate', {
      strings:[
        "Warmly.",
        "Wholeheartedly.",
        "Impassionedly."
      ],
      typeSpeed:50,
      backSpeed:50,
      loop:true
    });
</script>

    <!-- End Type JS-->

<script>
   
</script>    
@endsection


