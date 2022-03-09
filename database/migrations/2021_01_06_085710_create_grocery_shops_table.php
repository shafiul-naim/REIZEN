<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroceryShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery_shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150);
            $table->string('address',150);
            $table->string('image',150)->default('default.jpg');
            $table->string('contact',50);
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
        Schema::dropIfExists('grocery_shops');
    }
}
