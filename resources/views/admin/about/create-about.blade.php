@extends('layouts.admin_master')
@section('title','CreateAbout')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Create About</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\AboutController@store')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="whoname"/>
                            <label class="mdl-textfield__label">Name Who</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" cols="30" rows="10"  name="whodetails"></textarea>
                            <label class="mdl-textfield__label">Who Details</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('who_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="who_image">
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="ourname"/>
                            <label class="mdl-textfield__label">Name Our</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" cols="30" rows="10"  name="ourdetails"></textarea>
                            <label class="mdl-textfield__label">Our Details</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('our_image').src = window.URL.createObjectURL(this.files[0])" name="imageName1"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="our_image">
                        </div>

                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="howname"/>
                            <label class="mdl-textfield__label">Name How</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" cols="30" rows="10" name="howdetails"></textarea>
                            <label class="mdl-textfield__label">How Details</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('how_image').src = window.URL.createObjectURL(this.files[0])" name="imageName2"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="how_image">
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