@extends('layouts.admin_master')
@section('title','UpdateBlogPost')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update BlogPost</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\BlogPostController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$blogpost->id}}"/>
                <div class="form__article">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="blog_category_id" class="place">
                                <option value=""> Select a BlogCategory </option>
                                @foreach ($blogcategories as $blogcategory)
                                <option value="{{$blogcategory->id}}" @if ($blogpost->blog_category_id == $blogcategory->id) selected @endif> {{$blogcategory->name}} </option>
                                @endforeach
                             </select>
                        </div>
                    </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="title" type="text" id="firstName" value="{{$blogpost->title}}"/>
                            <label class="mdl-textfield__label" for="firstName">Blog Title</label>
                        </div>
                   
                    <div class="blog-des mdl-cell mdl-cell--12-col form__article employer-form__general_skills">
                        <div class="des mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" name="description" type="text" rows="3">{{$blogpost->description}}</textarea>
                            <label class="mdl-textfield__label" for="AboutMe">Blog Description</label>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('blog_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        @if ($blogpost->image == 'default.jpg')
                              <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                              <img width="250" height="130" id="blog_image" src="{{asset('public/uploads/blogsImages/'.$blogpost->image)}}" alt="">
                        @endif
                    </div>
                    @if (count($blogpost->blogImage) > 0)
                        @foreach ($blogpost->blogImage as $key => $item)
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="mb-3 floating-label">Image{{$key+1}}</label>
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('blog_image{{$key+1}}').src = window.URL.createObjectURL(this.files[0])" name="image[]"/>
                            
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="blog_image{{$key+1}}" src="{{asset('public/uploads/blogsImages/'.$item->imageName)}}">
                        </div>
                    @endforeach
                    @else
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="mb-3 floating-label">Image1</label>
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('blog_image1').src = window.URL.createObjectURL(this.files[0])" name="images[]"/>
                            
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="blog_image1">
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="mb-3 floating-label">Image2</label>
                            <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('blog_image2').src = window.URL.createObjectURL(this.files[0])" name="images[]"/>
                            
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <img width="200" height="100" id="blog_image2">
                        </div>
                    @endif
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