@extends('layouts.admin_master')
@section('title','RestaurantMenu')
@section('content')
<main class="mdl-layout__content ">

    <div class="mdl-grid ui-tables">
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">RestaurantMenu Table</h1>
                </div>
                <div class="form__action mdl-card__title">
                    <a href="{{action('Admin\RestaurantMenuController@create')}}" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Create RestaurantMenu
                    </a>
                </div>
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
            </div>
        </div>

    </div>
</main>
@endsection