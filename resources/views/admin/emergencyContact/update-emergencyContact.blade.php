@extends('layouts.admin_master')
@section('title','UpdateEmergencyContact')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update EmergencyContact</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\EmergencyContactController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$emcontact->id}}"/>
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="location_id" class="place">
                                <option value=""> Select a Location </option>
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}" @if ($emcontact->location_id == $location->id) selected @endif> {{$location->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name_police" value="{{$emcontact->name_police}}"/>
                            <label class="mdl-textfield__label">Police Station</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="address_police" value="{{$emcontact->address_police}}"/>
                            <label class="mdl-textfield__label">Police Station Address</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="police" value="{{$emcontact->police}}"/>
                            <label class="mdl-textfield__label">PS Number</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name_hospital" value="{{$emcontact->name_hospital}}"/>
                            <label class="mdl-textfield__label">Hospital Name</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="address_hospital" value="{{$emcontact->address_hospital}}"/>
                            <label class="mdl-textfield__label">Hospital Address</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="hospital" value="{{$emcontact->hospital}}"/>
                            <label class="mdl-textfield__label">Hospital Number</label>
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