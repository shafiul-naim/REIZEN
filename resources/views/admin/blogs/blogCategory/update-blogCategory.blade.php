@extends('layouts.admin_master')
@section('title','UpdateBlogCategory')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update BlogCategory</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="mdl-card__supporting-text">
            <form action="{{action('Admin\BlogCategoryController@update')}}" class="form" method="POST">
                @csrf
                
                <input type="hidden" name="id" value="{{$blogcategory->id}}">
                <div class="form__article">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="name" type="text" id="id" value="{{$blogcategory->name}}"/>
                            <label class="mdl-textfield__label" for="firstName">BlogCategory</label>
                        </div>
                    </div>
                </div>
                <div class="form__action">
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection