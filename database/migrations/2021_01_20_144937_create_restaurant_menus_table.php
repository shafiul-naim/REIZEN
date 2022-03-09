<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurent_name_id')->index()->nullable();
            $table->foreign('restaurent_name_id')->references('id')->on('restaurent_names')->onDelete('No Action')->onUpdate('No Action');
            $table->string('menu_name', 150);
            $table->string('image',150)->default('default.jpg');
            $table->double('price')->default(0);
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
        Schema::dropIfExists('restaurant_menus');
    }
}
