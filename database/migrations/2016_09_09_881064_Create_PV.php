<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePV extends Migration
{

    public function up()
    {
        Schema::create('PV', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->string('MAC','255');

$table->string('IP','255');

$table->string('cookie','255');

$table->string('user_agent','255');

$table->string('url','255');

$table->string('referer','255');

$table->string('longitude','255');

$table->string('latitude','255');


        });
    }

    public function down()
    {
        Schema::drop('PV');
    }
}
