<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('telephone')->unique();
            $table->string('password');
            $table->boolean('is_cuche');
            $table->boolean('is_rechuli');
            $table->boolean('is_jingche');
            $table->boolean('is_kaidaoyi');
            $table->boolean('is_kaiding');
            $table->boolean('is_zuankong');
            $table->integer('role');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
