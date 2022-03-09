@extends('layouts.admin_master')
@section('title','CreateHotel')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Create Hotel</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\HotelController@store')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name"/>
                            <label class="mdl-textfield__label">Hotel Name</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="address"/>
                            <label class="mdl-textfield__label">Hotel Address</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="location_id" class="place">
                                <option value=""> Select a Location </option>
                                @foreach ($locations as $location)
                                 <option value="{{$location->id}}"> {{$location->name}} </option> 
                                @endforeach
                                <option value="">Others</option>
                             </select>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('hotel_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="hotel_image">
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="website"/>
                            <label class="mdl-textfield__label">Website</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="contact"/>
                            <label class="mdl-textfield__label">Contact</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" name="details"></textarea>
                            <label class="mdl-textfield__label">Details</label>
                        </div>
                </div>
                <div class="form__action">
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        create
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection