<?php

    /* -------------- User Panel Route ------------- */

Route::get('/','User\IndexController@index');
Route::get('about','User\AboutController@index');
Route::get('gallery','User\GalleryController@index');
Route::get('places','User\PlaceController@index');
Route::get('place/{id}/{slug}','User\PlaceController@view');
Route::get('hotels','User\HotelsController@index');
Route::get('hotel/{id}/{slug}','User\HotelsController@view');
Route::get('restaurants','User\RestaurantsController@index');
Route::get('restaurant/{id}/{slug}','User\RestaurantsController@view');
Route::get('shoppingmall','User\ShoppingMallController@index');
Route::get('famousattire','User\FamousAttireController@index');
Route::get('tradaliment','User\TraditionalAlimentController@index');
Route::get('groceryshop','User\GroceryShopController@index');
Route::get('transportcost','User\TransportCostController@index');
Route::get('emergencycontact','User\EmergencyContactController@index');
Route::get('search-result','User\SearchResultController@formControl');
Route::get('destination/{id}/{slug}','User\SearchResultController@destination');
Route::get('blogs','User\BlogController@index');
Route::get('blog/{id}/{slug}','User\BlogController@view');
Route::post('store-query','User\QueryController@store');

Route::group(['middleware' => ['auth','verified']],function () {
    
    Route::group(['prefix' => 'user'],function () {

        Route::get('profile','User\ProfileController@index');
        Route::post('profile-store','User\ProfileController@store');
        //Route::get('profile-update','User\ProfileController@update');
        Route::get('blogpost','User\ProfileController@view');
        Route::post('blogpost-store','User\ProfileController@storeblog');

    });
    /* -------------- End User Panel Route ------------- */

 /* -------------- Admin Panel Route ------------- */
    Route::group(['middleware' => 'admin'], function(){

        Route::group(['prefix' => 'admin'],function () {
            Route::get('dashboard','Admin\DashboardController@index');

            /*------------------ Users -----------------*/
            Route::get('all-user','Admin\UserController@index');
            Route::get('storeuser','Admin\UserController@store');
            Route::get('update_pageuser/{id}','Admin\UserController@update_page');
            Route::post('update_pageuser','Admin\UserController@update');
            /*------------------ Users -----------------*/
            
            /*----------------- Location--------------- */
            Route::get('all-location','Admin\LocationController@index');
            Route::get('createlocation','Admin\LocationController@create');
            Route::post('storelocation','Admin\LocationController@store');
            Route::get('update_pagelocation/{id}','Admin\LocationController@update_page');
            Route::post('update_pagelocation','Admin\LocationController@update');
            Route::get('deletelocation/{id}','Admin\LocationController@delete');
            /*----------------- End Location--------------- */
            
        
            /*--------------About-------------*/
            Route::get('all-about','Admin\AboutController@index');
            Route::get('createabout','Admin\AboutController@create');
            Route::post('storeabout','Admin\AboutController@store');
            Route::get('deleteabout/{id}','Admin\AboutController@delete');
            Route::get('update_pageabout/{id}','Admin\AboutController@update_page');
            Route::post('updateabout','Admin\AboutController@update');
            /*-------------- End About-------------*/
            
            /*-------------- Contact -------------*/
            Route::get('all-contact','Admin\ContactController@index');
            Route::post('storecontact','Admin\ContactController@store');
            Route::get('update_pagecontact/{id}','Admin\ContactController@view_page');
            /*-------------- End Contact -------------*/
    
            /*--------------Blog Category-------------*/
            Route::get('all-blogcategory','Admin\BlogCategoryController@index');
            Route::get('createblogcategory','Admin\BlogCategoryController@create');
            Route::post('storeblogcategory','Admin\BlogCategoryController@store');
            Route::get('deleteblogcategory/{id}','Admin\BlogCategoryController@delete');
            Route::get('update_pageblogcategory/{id}','Admin\BlogCategoryController@update_page');
            Route::post('updateblogcategory','Admin\BlogCategoryController@update');
            /*-------------- End Blog Category-------------*/
    
            /*--------------Blog Post-------------*/
            Route::get('all-blogpost','Admin\BlogPostController@index');
            Route::get('createblogpost','Admin\BlogPostController@create');
            Route::post('storeblogpost','Admin\BlogPostController@store');
            Route::get('deleteblogpost/{id}','Admin\BlogPostController@delete');
            Route::get('update_pageblogpost/{id}','Admin\BlogPostController@update_page');
            Route::post('updateblogpost','Admin\BlogPostController@update');
            /*-------------- End Blog Post-------------*/
    
            /*-------------- Hotel -------------*/
            Route::get('all-hotel','Admin\HotelController@index');
            Route::get('createhotel','Admin\HotelController@create');
            Route::post('storehotel','Admin\HotelController@store');
            Route::get('deletehotel/{id}','Admin\HotelController@delete');
            Route::get('update_pagehotel/{id}','Admin\HotelController@update_page');
            Route::post('updatehotel','Admin\HotelController@update');
            /*-------------- End Hotel -------------*/
    
            /*-------------- Shopping Mall -------------*/
            Route::get('all-mall','Admin\ShoppingMallController@index');
            Route::get('createmall','Admin\ShoppingMallController@create');
            Route::post('storemall','Admin\ShoppingMallController@store');
            Route::get('deletemall/{id}','Admin\ShoppingMallController@delete');
            Route::get('update_pagemall/{id}','Admin\ShoppingMallController@update_page');
            Route::post('updatemall','Admin\ShoppingMallController@update');
            /*-------------- End Shopping Mall -------------*/
    
            /*-------------- Grocery Shop -------------*/
            Route::get('all-grocery','Admin\GroceryShopController@index');
            Route::get('creategrocery','Admin\GroceryShopController@create');
            Route::post('storegrocery','Admin\GroceryShopController@store');
            Route::get('deletegrocery/{id}','Admin\GroceryShopController@delete');
            Route::get('update_pagegrocery/{id}','Admin\GroceryShopController@update_page');
            Route::post('updategrocery','Admin\GroceryShopController@update');
            /*-------------- End Grocery Shop -------------*/
    
    
    
            /*-------------- Famous Cloth -------------*/
            Route::get('all-fcloth','Admin\FamousClothController@index');
            Route::get('createfcloth','Admin\FamousClothController@create');
            Route::post('storefcloth','Admin\FamousClothController@store');
            Route::get('deletefcloth/{id}','Admin\FamousClothController@delete');
            Route::get('update_pagefcloth/{id}','Admin\FamousClothController@update_page');
            Route::post('updatefcloth','Admin\FamousClothController@update');
            /*-------------- End Famous Cloth -------------*/
    
    
            /*-------------- Traditional Aliment -------------*/
            Route::get('all-tfood','Admin\TraditionalAlimentController@index');
            Route::get('createtfood','Admin\TraditionalAlimentController@create');
            Route::post('storetfood','Admin\TraditionalAlimentController@store');
            Route::get('deletetfood/{id}','Admin\TraditionalAlimentController@delete');
            Route::get('update_pagetfood/{id}','Admin\TraditionalAlimentController@update_page');
            Route::post('updatetfood','Admin\TraditionalAlimentController@update');
            /*-------------- End Traditional Aliment -------------*/
    
    
            /*-------------- Restaurent Name -------------*/
            Route::get('all-restname','Admin\RestaurentNameController@index');
            Route::get('createrestname','Admin\RestaurentNameController@create');
            Route::post('storerestname','Admin\RestaurentNameController@store');
            Route::get('deleterestname/{id}','Admin\RestaurentNameController@delete');
            Route::get('update_pagerestname/{id}','Admin\RestaurentNameController@update_page');
            Route::post('updaterestname','Admin\RestaurentNameController@update');
            /*-------------- End Restaurent Name -------------*/
    
    
            /*-------------- Restaurent Menu -------------*/
            Route::get('all-restmenu','Admin\RestaurantMenuController@index');
            Route::get('createrestmenu','Admin\RestaurantMenuController@create');
            Route::post('storerestmenu','Admin\RestaurantMenuController@store');
            Route::get('deleterestmenu/{id}','Admin\RestaurantMenuController@delete');
            Route::get('update_pagerestmenu/{id}','Admin\RestaurantMenuController@update_page');
            Route::post('updaterestmenu','Admin\RestaurantMenuController@update');
            /*-------------- End Restaurent Menu -------------*/
            

            /*-------------- Transport Category -------------*/
            Route::get('all-transcategory','Admin\TransportCategoryController@index');
            Route::get('createtranscategory','Admin\TransportCategoryController@create');
            Route::post('storetranscategory','Admin\TransportCategoryController@store');
            Route::get('deletetranscategory/{id}','Admin\TransportCategoryController@delete');
            Route::get('update_pagetranscategory/{id}','Admin\TransportCategoryController@update_page');
            Route::post('updatetranscategory','Admin\TransportCategoryController@update');
            /*-------------- End Transport Category -------------*/

            
            /*-------------- Transport Type -------------*/
            Route::get('all-transtype','Admin\TransportTypeController@index');
            Route::get('createtranstype','Admin\TransportTypeController@create');
            Route::post('storetranstype','Admin\TransportTypeController@store');
            Route::get('deletetranstype/{id}','Admin\TransportTypeController@delete');
            Route::get('update_pagetranstype/{id}','Admin\TransportTypeController@update_page');
            Route::post('updatetranstype','Admin\TransportTypeController@update');
            /*-------------- End Transport Type -------------*/
    
    
            /*-------------- Transport Cost -------------*/
            Route::get('all-transcost','Admin\TransportCostController@index');
            Route::get('createtranscost','Admin\TransportCostController@create');
            Route::post('storetranscost','Admin\TransportCostController@store');
            Route::get('deletetranscost/{id}','Admin\TransportCostController@delete');
            Route::get('update_pagetranscost/{id}','Admin\TransportCostController@update_page');
            Route::post('updatetranscost','Admin\TransportCostController@update');
            /*-------------- End Transport Cost -------------*/
    
    
            /*-------------- Emergency Contact -------------*/
            Route::get('all-emcontact','Admin\EmergencyContactController@index');
            Route::get('createemcontact','Admin\EmergencyContactController@create');
            Route::post('storeemcontact','Admin\EmergencyContactController@store');
            Route::get('deleteemcontact/{id}','Admin\EmergencyContactController@delete');
            Route::get('update_pageemcontact/{id}','Admin\EmergencyContactController@update_page');
            Route::post('updateemcontact','Admin\EmergencyContactController@update');
            /*-------------- End Emergency Contact -------------*/
        });

    });
    


    /* -------------- End Admin Panel Route ------------- */


});



    


//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', 'User\IndexController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
