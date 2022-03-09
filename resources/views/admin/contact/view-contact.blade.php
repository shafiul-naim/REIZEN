@extends('layouts.admin_master')
@section('title','Contact View')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card__supporting-text">
        <div class="mdl-grid ui-cards">
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <h3>Query</h3>
            </div>
            <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">{{$contact->firstname}} {{$contact->lastname}}</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <small>{{$contact->email}}</small>
    
    
                        {{$contact->question}}
    
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection