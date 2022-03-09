<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //blog_categories
    //id
    //blog_posts
    //blog_category_id
    //BlogCategory
    //BlogPost
    //BlogImages
    //return $this->belongsTo('App\BlogCategory');
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150);
            //$table->string('image',150)->default('default.jpg');
            $table->string('address',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
