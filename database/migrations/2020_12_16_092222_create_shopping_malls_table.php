<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingMallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_malls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150);
            $table->string('address',150);
            $table->string('image',150)->default('default.jpg');
            //$table->string('contact',50);
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
        Schema::dropIfExists('shopping_malls');
    }
}
