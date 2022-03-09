@extends('layouts.admin_master')
@section('title','CreateBlogPost')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Create BlogPost</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\BlogPostController@store')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__article">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="blog_category_id" class="place">
                               <option value=""> Select a BlogCategory </option>
                               @foreach ($blogcategories as $blogcategory)
                                <option value="{{$blogcategory->id}}"> {{$blogcategory->name}} </option> 
                               @endforeach
                            </select>
                        </div>
                    </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="title"/>
                            <label class="mdl-textfield__label">Blog Title</label>
                        </div>
                   
                    <div class="blog-des mdl-cell mdl-cell--12-col form__article employer-form__general_skills">
                        <div class="des mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" rows="3"  name="description"></textarea>
                            <label class="mdl-textfield__label" for="AboutMe">Blog Description</label>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <label class="mb-3 floating-label">Primary Image</label>
                        <input class="mdl-textfield__input" type="file"  onchange="document.getElementById('blog_image').src = window.URL.createObjectURL(this.files[0])" name="imageName"/>
                        
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <img width="200" height="100" id="blog_image">
                    </div>
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