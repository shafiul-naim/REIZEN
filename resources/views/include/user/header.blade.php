<!--top area-->
<section class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="top-contact">
                    <a href="mailto:info@reizen.com"><i class="far fa-envelope"></i>info@reizen.com</a>
                    <a href="tel:1234567890"><i class="fas fa-phone-alt"></i> 1234567890</a>
                 </div>  
            </div>
        </div>
    </div>
</section>
<!--header area-->
<header class="header-area">
    <div class="container">
        <nav class="navbar navbar-expand-md header row">
                <div class="logo col-sm-3 col-md-3">
                    <a href="{{action('User\IndexController@index')}}">Reizen</a>
                </div> 
                <div class="navigation col-sm-9 col-md-9 text-right">
                    
                    <form action="{{action('User\SearchResultController@formControl')}}" method="GET">
                        @csrf
                        <input type="text" placeholder="Search Tourist Place" name="searchKey">
                        <button type="submit" class="search" id="search-btn"><i class="fas fa-search"></i></button>
                        <span style="font-size:30px;cursor:pointer;" onclick="openNav()">☰</span>
                        @if (isset(Auth::user()->email))
                            <span onclick="openDropmenu()" class="dropdown-toggle span-dropdown">
                                <img src="{{asset('public/user_assets/')}}/images/about/who.jpg" alt="" style="width: 50px;height:50px;border-radius:50%;border:2px solid #fff">
                                <span class="h-color">{{Auth::user()->name}}</span>
                            </span>
                            <div id="dropmenu" class="dropmenu">
                                <a class="dropdown-item" href="{{action('User\ProfileController@index')}}"><i class="fas fa-user-alt"></i>Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        @else
                        <a href="{{ route('login') }}" class="login-btn">Login</a> 
                        @endif
                    </form>
                        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
                    <div id="myNav" class="overlay">

                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        
                        <!-- Overlay content -->
                        <div class="overlay-content">
                            <ul>
                                <li><a href="{{action('User\IndexController@index')}}">Home</a></li>
                                <li><a href="{{action('User\AboutController@index')}}">About</a></li>
                                <li class="dropdown">
                                    <h6 onclick="openSubmenu()" class="dropdown-toggle">Services</h6>
                                    <ul id="submenu">
                                        <li><a href="{{action('User\HotelsController@index')}}">Hotels</a></li>
                                        <li><a href="{{action('User\RestaurantsController@index')}}">Restaurants</a></li>
                                        <li><a href="{{action('User\ShoppingMallController@index')}}">Shopping Malls</a></li>
                                        <li><a href="{{action('User\GroceryShopController@index')}}">Grocery Shops</a></li>
                                        <li><a href="{{action('User\FamousAttireController@index')}}">Famous Attire</a></li>
                                        <li><a href="{{action('User\TraditionalAlimentController@index')}}">Traditional Aliment</a></li>
                                        <li><a href="{{action('User\TransportCostController@index')}}">Transport Cost</a></li>
                                        <li><a href="{{action('User\EmergencyContactController@index')}}">Emergency Contacts</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{action('User\PlaceController@index')}}">Places to Visit</a></li>
                                <li><a href="{{action('User\GalleryController@index')}}">Gallery</a></li>
                                <li><a href="{{action('User\BlogController@index')}}"">Blogs</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <script>
                        function openNav() {
                            document.getElementById("myNav").style.width = "100%";
                        }
                        
                        function closeNav() {
                            document.getElementById("myNav").style.width = "0%";
                        }
                    </script>    
                </div>
        </nav>
    </div>    
    <script>
      var a;
      function openDropmenu(){
        if (a == 1) {
          document.getElementById("dropmenu").style.display="block";
          return a=0;
        }
        else{
          document.getElementById("dropmenu").style.display="none";
          return a=1;
        } 
      }
      function openSubmenu(){
        if (a == 1) {
          document.getElementById("submenu").style.display="block";
          return a=0;
        }
        else{
          document.getElementById("submenu").style.display="none";
          return a=1;
        } 
      }
    </script>
    <script type="text/javascript">
        window.addEventListener("scroll",function() {
            var header=document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</header>
