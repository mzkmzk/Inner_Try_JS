<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedia extends Migration
{

    public function up()
    {
        Schema::table('Media', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('Media');
    }
}
