<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table="blog_categories";

    public function blogs()
    {
        return $this->hasMany('App\BlogPost','blog_category_id');
    }
}
