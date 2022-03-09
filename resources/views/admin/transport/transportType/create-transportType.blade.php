@extends('layouts.admin_master')
@section('title','CreateTransport Type')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Create Transport Type</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>
        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\TransportTypeController@store')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__article">
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
                            <select name="transport_category_id" class="place">
                                <option value=""> Select a Category </option>
                                @foreach ($transcategories as $category)
                                 <option value="{{$category->id}}"> {{$category->category}} </option> 
                                @endforeach
                             </select>
                        </div>
                        {{-- <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="type"/>
                            <label class="mdl-textfield__label">Transport Type</label>
                        </div> --}}
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