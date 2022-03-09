@extends('layouts.admin_master')
@section('title','Dashboard')
@section('content')
<main class="mdl-layout__content ">
    <div class="mdl-grid ui-tables">
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">Location Table</h1>
                </div>
                <a href="{{action('Admin\LocationController@index')}}">
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Location Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Location Address</th>
                                <th class="mdl-data-table__cell--non-numeric">Image</th>
                                <th class="mdl-data-table__cell--non-numeric">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1
                                @endphp
                             @foreach ($locations as $item)
                             <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->address}}</td>
                                <td class="mdl-data-table__cell--non-numeric">@if ($item->image == 'default.jpg')
                                    <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                  <img width="50" height="30" src="{{asset('public/uploads/locationImages/'.$item->image)}}" alt="">
                                @endif</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\LocationController@update_page',['id'=> $item->id])}}">Update</a></span><span><a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\LocationController@delete',['id'=> $item->id])}}" class="delete_a">Delete</a></span></td>
                            </tr>  
                             @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">Hotel Table</h1>
                </div>
                <a href="{{action('Admin\HotelController@index')}}">
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Hotel Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Hotel Address</th>
                                <th class="mdl-data-table__cell--non-numeric">Location</th>
                                <th class="mdl-data-table__cell--non-numeric">Image</th>
                                <th class="mdl-data-table__cell--non-numeric">Website</th>
                                <th class="mdl-data-table__cell--non-numeric">Contact</th>
                                <th class="mdl-data-table__cell--non-numeric">Details</th>
                                <th class="mdl-data-table__cell--non-numeric">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                             @php
                                 $i=1
                             @endphp
                             @foreach ($hotels as $item)
                             <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->address}}</td>
                                <td class="mdl-data-table__cell--non-numeric">@if($item->location['name'] == null) N/A @else {{$item->location['name']}} @endif</td>
                                <td class="mdl-data-table__cell--non-numeric">@if ($item->image == 'default.jpg')
                                    <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                  <img width="50" height="30" src="{{asset('public/uploads/hotelImages/'.$item->image)}}" alt="">
                                @endif</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->website}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->contact}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{str_limit($item->details,50,'...')}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\HotelController@update_page',['id'=> $item->id])}}">Update</a></span><span><a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\HotelController@delete',['id'=> $item->id])}}" class="delete_a">Delete</a></span></td>
                            </tr> 
                             @endforeach
                                         
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">RestaurentName Table</h1>
                </div>
                <a href="{{action('Admin\RestaurentNameController@index')}}">
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Restaurent Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Restaurent Address</th>
                                <th class="mdl-data-table__cell--non-numeric">Location</th>
                                <th class="mdl-data-table__cell--non-numeric">Image</th>
                                <th class="mdl-data-table__cell--non-numeric">Contact</th>
                                <th class="mdl-data-table__cell--non-numeric">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1
                                @endphp
                             @foreach ($restnames as $item)
                             <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->address}}</td>
                                <td class="mdl-data-table__cell--non-numeric">@if($item->location['name'] == null) N/A @else {{$item->location['name']}} @endif</td>
                                <td class="mdl-data-table__cell--non-numeric">@if ($item->image == 'default.jpg')
                                    <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                  <img width="50" height="30" src="{{asset('public/uploads/restnameImages/'.$item->image)}}" alt="">
                                @endif</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->contact}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\RestaurentNameController@update_page',['id'=> $item->id])}}">Update</a></span><span><a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\RestaurentNameController@delete',['id'=> $item->id])}}" class="delete_a">Delete</a></span></td>
                            </tr>  
                             @endforeach
                            
                               
                            
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">RestaurantMenu Table</h1>
                </div>
                <a href="{{action('Admin\RestaurantMenuController@index')}}">
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">RestaurantName</th>
                                <th class="mdl-data-table__cell--non-numeric">RestaurantMenu Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Image</th>
                                <th class="mdl-data-table__cell--non-numeric">Price</th>
                                <th class="mdl-data-table__cell--non-numeric">Menu Type</th>
                                <th class="mdl-data-table__cell--non-numeric">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1
                                @endphp
                             @foreach ($restmenus as $item)
                             <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->restname['name']}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->menu_name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">@if ($item->image == 'default.jpg')
                                    <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                  <img width="50" height="30" src="{{asset('public/uploads/restmenuImages/'.$item->image)}}" alt="">
                                @endif</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->price}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->menuType}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\RestaurantMenuController@update_page',['id'=> $item->id])}}">Update</a></span><span><a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\RestaurantMenuController@delete',['id'=> $item->id])}}" class="delete_a">Delete</a></span></td>
                            </tr>  
                             @endforeach
        
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">User Table</h1>
                </div>
                <a href="{{action('Admin\UserController@index')}}">
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">User Name</th>
                                <th class="mdl-data-table__cell--non-numeric">User Email</th>
                                <th class="mdl-data-table__cell--non-numeric">User Type</th>
                                <th class="mdl-data-table__cell--non-numeric">Image</th>
                                <th class="mdl-data-table__cell--non-numeric">About</th>
                                <th class="mdl-data-table__cell--non-numeric">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1
                                @endphp
                             @foreach ($users as $item)
                             <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->email}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->userType}}</td>
                                <td class="mdl-data-table__cell--non-numeric">@if ($item->image == 'default.jpg')
                                    <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                  <img width="50" height="30" src="{{asset('public/uploads/userImages/'.$item->image)}}" alt="">
                                @endif</td>
                                <td class="mdl-data-table__cell--non-numeric">{{str_limit($item->about,50,'...')}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\UserController@update_page',['id'=> $item->id])}}">Update User Type</a></span></td>
                            </tr>  
                             @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>

    </div>
</main>
@endsection