@extends('layouts.user_master')
@section('title','SingleRestaurant')
@section('content')
    <!-- Start Slide Area -->
    <section class="banner-area mg-b" >
      <div id="myCarousel" class="carousel carousel-dark slide carousel-fade">
        <ol class="carousel-indicators">
          <li id="#one" class="active"></li>
          <li id="#two"></li>
          <li id="#three"></li>
          <li id="#four"></li>
          <li id="#five"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide1.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide2.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide3.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide4.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide5.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <a href="#myCarousel" id="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span></a>
        <a href="#myCarousel" id="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span></a>
        <div class="banner-overlay">
          <div class="banner-content">
            <h2>{{$restaurant->name}}</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis est adipisci alias. Facilis, adipisci alias sunt modi illum laboriosam ratione, odio nulla asperiores repellat necessitatibus rem dolorem ullam consequuntur. Alias.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Slide Area -->

    <!-- Start Details Area-->

    <section class="singlerestaurant-area pb-100">
      <div class="container">
        <div class="row pt-50 section-title">
          <div class="col-md-12 about-title text-center" data-aos="fade-left"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine">
            <h2>about us.</h2>
            <h4 class="about-heading">check out our amazing service</h4>
          </div>
        </div>
        <div class="row pb-100">
          <div class="col-md-6" data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine">
            <h4 class="text-center">about us</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <div class="row">
              <div class="col-md-6">
                <h4><i class="fas fa-map-marked-alt"></i>address</h4>
                <span>{{$restaurant->address}}</span>
              </div>
              <div class="col-md-6">
                <h4><i class="fas fa-address-book"></i>contact</h4>
                <span>{{$restaurant->contact}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine">
            <img src="{{asset('public/user_assets/')}}/images/singleresturent/about.jpg" alt="">
          </div>
        </div>
        <div class="row pt-50 section-title">
          <div class="col-md-12 about-title text-center" data-aos="fade-up"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine">
            <h2>our menu.</h2>
            <h4 class="about-heading">check out our palatable aliment</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs nav-fill" id="myTab" data-aos="fade-left"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
              <li class="nav-item">
                <a href="#all" class="nav-link active">
                  All
                </a>
              </li>
              <li class="nav-item">
                <a href="#breakfast" class="nav-link">
                  Breakfast
                </a>
              </li>
              <li class="nav-item">
                <a href="#lunch" class="nav-link">
                  Lunch
                </a>
              </li>
              <li class="nav-item">
                <a href="#dinner" class="nav-link">
                  Dinner
                </a>
              </li>
              <li class="nav-item">
                <a href="#drinks" class="nav-link">
                  Drinks
                </a>
              </li>
            </ul>
            @php
               $all = App\RestaurantMenu::where('restaurent_name_id',$restaurant->id)->get();
               $breakfast = App\RestaurantMenu::where('restaurent_name_id',$restaurant->id)->where('menuType','Breakfast')->get();
               $lunch = App\RestaurantMenu::where('restaurent_name_id',$restaurant->id)->where('menuType','Lunch')->get();
               $dinner = App\RestaurantMenu::where('restaurent_name_id',$restaurant->id)->where('menuType','Dinner')->get();
               $drinks = App\RestaurantMenu::where('restaurent_name_id',$restaurant->id)->where('menuType','Drinks')->get();
               
            @endphp
            <div class="tab-content pt-50">
              <div class="tab-pane fade show active" id="all">
                <div class="row">
                  @foreach ($all as $item)
                    <div class="col-md-6" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                      <div class="menu">
                        <div class="single-menu">
                            <img src="{{asset('public/uploads/restmenuImages/'.$item->image)}}">
                            <div class="menu-content">
                                <h4>{{$item->menu_name}} <span>{{money($item->price)}}</span></h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec semper ullamcorper ipsum, sed finibus turpis rutrum quis.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="breakfast">
                <div class="row">
                  @foreach ($breakfast as $item)
                    <div class="col-md-6">
                      <div class="menu">
                        <div class="single-menu">
                            <img src="{{asset('public/uploads/restmenuImages/'.$item->image)}}">
                            <div class="menu-content">
                                <h4>{{$item->menu_name}} <span>{{money($item->price)}}</span></h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec semper ullamcorper ipsum, sed finibus turpis rutrum quis.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="lunch">
                <div class="row">
                  @foreach ($lunch as $item)
                    <div class="col-md-6">
                      <div class="menu">
                        <div class="single-menu">
                            <img src="{{asset('public/uploads/restmenuImages/'.$item->image)}}">
                            <div class="menu-content">
                                <h4>{{$item->menu_name}} <span>{{money($item->price)}}</span></h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec semper ullamcorper ipsum, sed finibus turpis rutrum quis.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="dinner">
                <div class="row">
                  @foreach ($dinner as $item)
                    <div class="col-md-6">
                      <div class="menu">
                        <div class="single-menu">
                            <img src="{{asset('public/uploads/restmenuImages/'.$item->image)}}">
                            <div class="menu-content">
                                <h4>{{$item->menu_name}} <span>{{money($item->price)}}</span></h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec semper ullamcorper ipsum, sed finibus turpis rutrum quis.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="drinks">
                <div class="row">
                  @foreach ($drinks as $item)
                    <div class="col-md-6">
                      <div class="menu">
                        <div class="single-menu">
                            <img src="{{asset('public/uploads/restmenuImages/'.$item->image)}}">
                            <div class="menu-content">
                                <h4>{{$item->menu_name}} <span>{{money($item->price)}}</span></h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec semper ullamcorper ipsum, sed finibus turpis rutrum quis.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Details Area-->
    

    <!-- Start Banner Areas Jquery-->
    <script>
      $(function(){
        $('.carousel').carousel({
          interval: 3000,
        });
        $('#next').click(function(){
          $('#myCarousel').carousel('next');
        })
        $('#prev').click(function(){
          $('#myCarousel').carousel('prev');
        })
        $('#one').click(function(){
          $('#myCarousel').carousel(0);
        })
        $('#two').click(function(){
          $('#myCarousel').carousel(1);
        })
        $('#three').click(function(){
          $('#myCarousel').carousel(2);
        })
        $('#four').click(function(){
          $('#myCarousel').carousel(3);
        })
        $('#five').click(function(){
          $('#myCarousel').carousel(4);
        })
      })
    </script>
    <!-- Start Banner Areas Jquery-->

    <!-- Start Tab Area Jquery-->
    <script>
      $(function(){
        $('#myTab a').on('click', function(e){
          e.preventDefault();
          $(this).tab('show');
        })
      })
    </script>
    <!-- End Tab Area Jquery-->

    <!-- Start Slide Area Javascript-->

    {{-- <script type="text/javascript">

      var slides = document.querySelectorAll('.slide');
      var btns = document.querySelectorAll('.btn');
      let currentSlide=1;

      // javascript for image manual nav

      var manualNav = function(manual){
        
        slides.forEach((slide) => {
          slide.classList.remove('active');
          btns.forEach((btn) => {
            btn.classList.remove('active');
          });
        });

        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
      }

      btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
          manualNav(i);
          currentSlide = i;
        });
      });

      // javascript for image auto play nav

      var repeat = function(activeClass){
        let active = document.getElementsByClassName('active');
        let i = 1;
        var repeater = () => {
          setTimeout(function(){
            [...active].forEach((activeSlide) => {
              activeSlide.classList.remove('active');
            });
            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;
            if(slides.length == i){
              i=0;
            }
            if (i >= slides.length) {
              return;
            }
            repeater(); 
          }, 3000);
        }
        repeater(); 
      }
      repeat();

    </script> --}}

    <!-- End Slide Area Javascript-->
@endsection