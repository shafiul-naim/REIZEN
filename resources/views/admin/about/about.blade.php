@extends('layouts.admin_master')
@section('title','About')
@section('content')
<main class="mdl-layout__content ">

    <div class="mdl-grid ui-tables">
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">About Table</h1>
                </div>
                @if (count($abouts) == 0)
                    <div class="form__action mdl-card__title">
                        <a href="{{action('Admin\AboutController@create')}}" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            Create About
                        </a>
                    </div>
                @else
                    
                @endif
                <div class="mdl-card__supporting-text no-padding">
                    <table class="mdl-data-table mdl-js-data-table stripped-table">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">#</th>
                            <th class="mdl-data-table__cell--non-numeric">Name Who</th>
                            <th class="mdl-data-table__cell--non-numeric">Details</th>
                            <th class="mdl-data-table__cell--non-numeric">Image</th>
                            <th class="mdl-data-table__cell--non-numeric">Name Our</th>
                            <th class="mdl-data-table__cell--non-numeric">Details</th>
                            <th class="mdl-data-table__cell--non-numeric">Image</th>
                            <th class="mdl-data-table__cell--non-numeric">Name Work</th>
                            <th class="mdl-data-table__cell--non-numeric">Details</th>
                            <th class="mdl-data-table__cell--non-numeric">Image</th>
                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                         @php
                             $i=1
                         @endphp
                         @foreach ($abouts as $item)
                         <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$item->whoname}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{str_limit($item->whodetails,20,'...')}}</td>
                            <td class="mdl-data-table__cell--non-numeric">@if ($item->whoimage == 'default.jpg')
                                <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                              <img width="50" height="30" src="{{asset('public/uploads/aboutImages/'.$item->whoimage)}}" alt="">
                            @endif</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$item->ourname}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{str_limit($item->ourdetails,20,'...')}}</td>
                            <td class="mdl-data-table__cell--non-numeric">@if ($item->ourimage == 'default.jpg')
                                <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                              <img width="50" height="30" src="{{asset('public/uploads/aboutImages/'.$item->ourimage)}}" alt="">
                            @endif</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$item->howname}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{str_limit($item->howdetails,20,'...')}}</td>
                            <td class="mdl-data-table__cell--non-numeric">@if ($item->howimage == 'default.jpg')
                                <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                              <img width="50" height="30" src="{{asset('public/uploads/aboutImages/'.$item->howimage)}}" alt="">
                            @endif</td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\AboutController@update_page',['id'=> $item->id])}}">Update</a></span><span><a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\AboutController@delete',['id'=> $item->id])}}" class="delete_a">Delete</a></span></td>
                        </tr> 
                         @endforeach
                                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection