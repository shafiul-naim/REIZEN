@extends('layouts.user_master')
@section('title','Destination')
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
            <img src="{{asset('public/user_assets/')}}/images/singleplace/p1/p1.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleplace/p1/p2.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleplace/p1/p3.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleplace/p1/p4.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/user_assets/')}}/images/singleplace/p1/p5.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <a href="#myCarousel" id="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span></a>
        <a href="#myCarousel" id="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span></a>
        <div class="banner-overlay">
          <div class="banner-content">
            <h2>{{$loc->name}}</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis est adipisci alias. Facilis, adipisci alias sunt modi illum laboriosam ratione, odio nulla asperiores repellat necessitatibus rem dolorem ullam consequuntur. Alias.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- End Slide Area -->

    <!-- Start Destination Area -->

    <section class="destination-area pb-100">
      <div class="container">
          <div class="row pt-50 section-title">
            <div class="col-md-12 about-title text-center">
                <h2>destination.</h2>
                <h4 class="about-heading">check out the destination</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs nav-fill" id="myTab">
                <li class="nav-item">
                  <a href="#place" class="nav-link active">
                    Place
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#hotel" class="nav-link">
                    Hotel
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#restaurant" class="nav-link">
                    Restaurant
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#transportcost" class="nav-link">
                    Transport Cost
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#emergencycontact" class="nav-link">
                    Emergency Contact
                  </a>
                </li>
              </ul>
              <div class="tab-content pt-50" id="myTabContent">
                <div class="tab-pane fade show active" id="place">
                  <div class="destination-content">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="location-details">
                          <h2>place details</h2>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <div class="location">
                              <h5>location</h5>
                              <h4><i class="far fa-map"></i>{{$loc->address}}</h4>
                            </div>
                          </div>
                          <div class="col-md-12 pt-50 text-center">
                            <div class="location">
                              <h1>89<span class="span">km</span></h1>
                              <p>Far From Sylhet City</p>
                            </div>
                          </div>
                          <div class="col-md-12 pt-50 text-center">
                            <div class="location">
                              <p>Best Time for Visit</p>
                              <h4>season <span class="span">[ Month - Month ]</span></h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="gothere text-center">
                          <button onclick="gothere()">
                            <span><i class="fas fa-place-of-worship"></i></span>
                            <h5>how to go there</h5>
                          </button>
                          <hr>
                          <div class="gothere-text" id="gothere-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="gothere text-center">
                          <button onclick="wherestay()">
                            <span><i class="fas fa-hotel"></i></span>
                            <h5>where to remain</h5>
                          </button>
                          <hr>
                          <div class="gothere-text" id="wherestay-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="gothere text-center">
                          <button onclick="whereeat()">
                            <span><i class="fas fa-cocktail"></i></span>
                            <h5>where to consume</h5>
                          </button>
                          <hr>
                          <div class="gothere-text" id="whereeat-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-50 section-title">
                      <div class="col-md-12 pt-50 about-title text-center">
                        <h2>contiguous place.</h2>
                        <h4 class="about-heading">check out mosaic location in sylhet</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="owl-carousel owl-theme pt-50">
                        @foreach ($locations as $item)
                          <div class="item">
                            <div class="nearbyplace">
                              <div class="place-card flex">
                                <div class="place-img">
                                    <img src="{{asset('public/uploads/locationImages/'.$item->image)}}" alt="">
                                </div>
                                <div class="place-content text-center">
                                    <h3>{{$item->name}}</h3>
                                    <a href="">
                                      <i class="fas fa-location-arrow"></i>
                                      <span>{{$item->address}}</span>
                                    </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="hotel">
                  <div class="destination-content">
                    <div class="row">
                      @if (count($hotels) > 0)
                        @foreach ($hotels as $item)
                          <div class="col-md-4">
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
                      @else
                       <h2 class="text-danger"> hotel not found</h2>  
                      @endif  
                    </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="restaurant">
                  @if (count($restaurents) > 0)
                    @foreach ($restaurents as $item)
                      <div class="col-md-4">
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
                  @else
                    <h2 class="text-danger"> restaurant not found</h2> 
                  @endif
                </div>
                <div class="tab-pane fade" id="transportcost">
                  <div class="destination-content">
                    <div class="row">
                      @if (count($transcosts) > 0)
                        @foreach ($transcosts as $item)
                          <div class="col-md-6 mb-3">
                            <h2 class="text-center">{{$item->category['category']}}</h2>
                            {{-- {{$item->transportcost}} --}}
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
                                            <tr>
                                                <td class="td-color">{{$item->from}}</td>
                                                <td class="td-color">{{$item->to}}</td>
                                                <td class="td-color">{{money($item->price)}}</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                        @endforeach
                      @else
                       <h2 class="text-danger"> transportcost not found</h2>  
                      @endif
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="emergencycontact">
                  <div class="destination-content">
                    <div class="row">
                      @if (count($emergcon) > 0)
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
                                      @foreach ($emergcon as $item)
                                          <tr>
                                              <td class="td-color">{{$item->location['name']}}</td>
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
                      @else
                        <h2 class="text-danger"> contact not found</h2>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- End Destination Area -->

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

    <!-- Start Tab Areas Location's Button Javascript-->
    <script>
      var a;
      function gothere(){
        if (a == 1) {
          document.getElementById("gothere-text").style.display="block";
          return a=0;
        }
        else{
          document.getElementById("gothere-text").style.display="none";
          return a=1;
        } 
      }
      function wherestay(){
        if (a == 1) {
          document.getElementById("wherestay-text").style.display="block";
          return a=0;
        }
        else{
          document.getElementById("wherestay-text").style.display="none";
          return a=1;
        } 
      }
      function whereeat(){
        if (a == 1) {
          document.getElementById("whereeat-text").style.display="block";
          return a=0;
        }
        else{
          document.getElementById("whereeat-text").style.display="none";
          return a=1;
        } 
      }
    </script>
    <!-- End Tab Areas Location's Button Javascript--->    

    <!-- Start Nearby Place Jquery -->
    <script>
      $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          dots: false,
          stagePadding: 50,
          nav:true,
          responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
          }
        })
      });
    </script>
    <!-- End Nearby Place Jquery -->

@endsection