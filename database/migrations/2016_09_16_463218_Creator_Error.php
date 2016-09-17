<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatorError extends Migration
{

    public function up()
    {
        Schema::create('Creator_Error', function (Blueprint $table) {
            $table->increments('id');

$table->dateTime('created_at');

$table->dateTime('updated_at');

$table->dateTime('deleted_at');

$table->string('message','255');

$table->string('line','255');

$table->string('column','255');

$table->string('error_object','255');

$table->string('pv_id','255');


        });
    }

    public function down()
    {
        Schema::drop('Creator_Error');
    }
}
