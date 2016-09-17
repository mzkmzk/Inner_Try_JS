<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorPV extends Migration
{

    public function up()
    {
        Schema::table('Creator_PV', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('Creator_PV');
    }
}
