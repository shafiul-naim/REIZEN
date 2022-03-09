@extends('layouts.admin_master')
@section('title','UpdateAbout')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update About</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\AboutController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$about->id}}"/>
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="whoname" value="{{$about->whoname}}"/>
                            <label class="mdl-textfield__label">Name Who</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" name="whodetails">{{$about->whodetails}}</textarea>
                            <label class="mdl-textfield__label">Who Details</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file" onchange="document.getElementById('who_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            @if ($about->whoimage == 'default.jpg')
                                <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                <img width="250" height="130" id="who_image" src="{{asset('public/uploads/aboutImages/'.$about->whoimage)}}" alt="">
                            @endif
                        </div>

                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="ourname" value="{{$about->ourname}}"/>
                            <label class="mdl-textfield__label">Name Our</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" name="ourdetails">{{$about->ourdetails}}</textarea>
                            <label class="mdl-textfield__label">Who Details</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file" onchange="document.getElementById('our_image').src = window.URL.createObjectURL(this.files[0])" name="imageName1"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            @if ($about->ourimage == 'default.jpg')
                                <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                <img width="250" height="130" id="our_image" src="{{asset('public/uploads/aboutImages/'.$about->ourimage)}}" alt="">
                            @endif
                        </div>


                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="howname" value="{{$about->howname}}"/>
                            <label class="mdl-textfield__label">Name How</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" name="howdetails">{{$about->howdetails}}</textarea>
                            <label class="mdl-textfield__label">Who Details</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file" onchange="document.getElementById('our_image').src = window.URL.createObjectURL(this.files[0])" name="imageName2"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            @if ($about->howimage == 'default.jpg')
                                <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                                @else
                                <img width="250" height="130" id="our_image" src="{{asset('public/uploads/aboutImages/'.$about->howimage)}}" alt="">
                            @endif
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