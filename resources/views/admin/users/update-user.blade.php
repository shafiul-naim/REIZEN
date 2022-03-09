@extends('layouts.admin_master')
@section('title','UpdateUser')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update User</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\UserController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}"/>
                <div class="form__article">
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <select class="place">
                            <option value="Admin" @if ($user->userType == 'Admin') selected @endif>Admin</option>
                            <option value="User" @if ($user->userType == 'User') selected @endif>User</option>
                        </select>
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