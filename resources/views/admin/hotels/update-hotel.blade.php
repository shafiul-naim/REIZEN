@extends('layouts.admin_master')
@section('title','UpdateHotel')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update Hotel</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\HotelController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$hotel->id}}"/>
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name" value="{{$hotel->name}}"/>
                            <label class="mdl-textfield__label">Hotel Name</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="address" value="{{$hotel->address}}"/>
                            <label class="mdl-textfield__label">Hotel Address</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="location_id" class="place">
                                <option value=""> Select a Location </option>
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}" @if ($hotel->location_id == $location->id) selected @endif> {{$location->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file" onchange="document.getElementById('hotel_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            @if ($hotel->image == 'default.jpg')
                                <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                <img width="250" height="130" id="hotel_image" src="{{asset('public/uploads/hotelImages/' .$hotel->image)}}" alt="">
                            @endif
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="website" value="{{$hotel->website}}"/>
                            <label class="mdl-textfield__label">Website</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="contact" value="{{$hotel->contact}}"/>
                            <label class="mdl-textfield__label">Contact</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" name="details">{{$hotel->details}}</textarea>
                            <label class="mdl-textfield__label">Details</label>
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