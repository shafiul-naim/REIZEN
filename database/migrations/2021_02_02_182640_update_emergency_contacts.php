<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmergencyContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emergency_contacts',function($t){
            $t->string('name_police',150);
            $t->string('address_police',150);
            $t->string('name_hospital',150);
            $t->string('address_hospital',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emergency_contacts',function($t){
            $t->dropColumn('name_police');
            $t->dropColumn('address_police');
            $t->dropColumn('name_hospital');
            $t->dropColumn('address_hospital');
        });
    }
}
