<div class="mdl-layout__drawer">
    <header>reizen</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{action('Admin\DashboardController@index')}}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\AboutController@index')}}">
                        <i class="material-icons">local_hotel</i>
                        About
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\LocationController@index')}}">
                        <i class="material-icons">room</i>
                        Location
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">ballot</i>
                            Blogs
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{action('Admin\BlogCategoryController@index')}}">
                                Blogs Category
                            </a>
                            <a class="mdl-navigation__link" href="{{action('Admin\BlogPostController@index')}}">
                                Blogs Post
                            </a>
                            <a class="mdl-navigation__link" href="">
                                Blog Images
                            </a>
                        </div>
                    </div>
                    <a class="mdl-navigation__link" href="{{action('Admin\HotelController@index')}}">
                        <i class="material-icons">local_hotel</i>
                        Hotels
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\ShoppingMallController@index')}}">
                        <i class="material-icons" role="presentation">local_mall</i>
                        Shoppping Malls
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\GroceryShopController@index')}}">
                        <i class="material-icons" role="presentation">local_grocery_store</i>
                        Grocery Shops
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\EmergencyContactController@index')}}">
                        <i class="material-icons">local_hospital</i>
                        Emergency Contact
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\FamousClothController@index')}}">
                        <i class="material-icons">accessibility</i>
                        Famous Attire
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\TraditionalAlimentController@index')}}">
                        <i class="material-icons">wine_bar</i>
                        Traditional Aliment
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">local_cafe</i>
                            Restaurants
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{action('Admin\RestaurentNameController@index')}}">
                                Restaurants Name
                            </a>
                            <a class="mdl-navigation__link" href="{{action('Admin\RestaurantMenuController@index')}}">
                                Restaurants Menu
                            </a>
                        </div>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">local_shipping</i>
                            Transports
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{action('Admin\TransportCategoryController@index')}}">
                                Transports Category
                            </a>
                            <a class="mdl-navigation__link" href="{{action('Admin\TransportTypeController@index')}}">
                                Transports Type
                            </a>
                            <a class="mdl-navigation__link" href="{{action('Admin\TransportCostController@index')}}">
                                Transports Cost
                            </a>
                        </div>
                    </div>
                    <a class="mdl-navigation__link" href="{{action('Admin\UserController@index')}}">
                        <i class="material-icons">wc</i>
                        All Visitors
                    </a>
                    {{-- <div class="sub-navigation">
                        
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="">
                                Admin
                            </a>
                            <a class="mdl-navigation__link" href="">
                                Visitors
                            </a>
                        </div>
                    </div> --}}
                    <hr>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>