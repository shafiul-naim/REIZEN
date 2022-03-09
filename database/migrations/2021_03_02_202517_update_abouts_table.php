<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts',function($t){
            $t->string('whoname',150);
            $t->string('ourname',150);
            $t->string('howname',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts',function($t){
            $t->dropColumn('whoname');
            $t->dropColumn('ourname');
            $t->dropColumn('howname');
        });
    }
}
