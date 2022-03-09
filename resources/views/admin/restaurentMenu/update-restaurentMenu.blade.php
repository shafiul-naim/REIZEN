@extends('layouts.admin_master')
@section('title','UpdateRestaurantMenu')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update RestaurantMenu</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\RestaurantMenuController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$restmenu->id}}"/>
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="restaurent_name_id" class="place">
                                <option value=""> Select a restname </option>
                                @foreach ($restnames as $restname)
                                <option value="{{$restname->id}}" @if ($restname->restname_id == $restname->id) selected @endif> {{$restname->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="menu_name" value="{{$restmenu->menu_name}}"/>
                            <label class="mdl-textfield__label">RestaurantMenu Name</label>
                        </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="file" onchange="document.getElementById('restmenu_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        @if ($restmenu->image == 'default.jpg')
                              <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                              <img width="250" height="130" id="restmenu_image" src="{{asset('public/uploads/restmenuImages/'.$restmenu->image)}}" alt="">
                            @endif
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="price" value="{{$restmenu->price}}"/>
                        <label class="mdl-textfield__label">Price</label>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <select name="menuType" id="" class="place">
                            <option value="">Select a Type</option>
                            <option value="Breakfast" @if ($restmenu->menuType == 'Breakfast') selected @endif>Breakfast</option>
                            <option value="Lunch" @if ($restmenu->menuType == 'Lunch') selected @endif>Lunch</option>
                            <option value="Dinner"@if ($restmenu->menuType == 'Dinner') selected @endif>Dinner</option>
                            <option value="Drinks"@if ($restmenu->menuType == 'Drinks') selected @endif>Drinks</option>
                        </select>
                    </div>
                </div>
                <div class="form__action">
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        update
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection