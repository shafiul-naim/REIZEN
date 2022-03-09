@extends('layouts.admin_master')
@section('title','UpdatevFamousCloth')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update Famous Cloth</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\FamousClothController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$fcloth->id}}"/>
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name" value="{{$fcloth->name}}"/>
                            <label class="mdl-textfield__label">Famous Cloth Name</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" name="details">{{$fcloth->details}}</textarea>
                            <label class="mdl-textfield__label">Details</label>
                        </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="file" onchange="document.getElementById('fcloth_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        @if ($fcloth->image == 'default.jpg')
                              <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                              <img width="250" height="130" id="fcloth_image" src="{{asset('public/uploads/fclothImages/'.$fcloth->image)}}" alt="">
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