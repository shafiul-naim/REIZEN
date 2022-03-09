<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    protected $table="blog_images";

    public function blog()
    {
        return $this->belongsTo('App\BlogPost','blog_post_id');
    }
}
