@extends('layouts.admin_master')
@section('title','CreateBlogCategory')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Create BlogCategory</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\BlogCategoryController@store')}}" class="form" method="POST">
                @csrf
                <div class="form__article">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="name" type="text" id="id" value=""/>
                            <label class="place mdl-textfield__label" for="firstName">Enter BlogCategory</label>
                        </div>
                    </div>
                </div>
                <div class="form__action">
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection