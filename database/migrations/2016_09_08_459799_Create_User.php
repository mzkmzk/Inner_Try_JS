<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{

    public function up()
    {
        Schema::table('User', function (Blueprint $table) {
            
        });
    }

    public function down()
    {
        Schema::drop('User');
    }
}
