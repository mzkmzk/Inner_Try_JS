<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivity extends Migration
{

    public function up()
    {
        Schema::table('Activity', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('Activity');
    }
}
