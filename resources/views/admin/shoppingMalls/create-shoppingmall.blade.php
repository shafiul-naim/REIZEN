@extends('layouts.admin_master')
@section('title','CreateShoppingMall')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Create Shopping Mall</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\ShoppingMallController@store')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name"/>
                            <label class="mdl-textfield__label">Shopping Mall Name</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="address"/>
                            <label class="mdl-textfield__label">Shopping Mall Address</label>
                        </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('mall_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <img width="200" height="100" id="mall_image">
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="contact"/>
                        <label class="mdl-textfield__label">Contact</label>
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