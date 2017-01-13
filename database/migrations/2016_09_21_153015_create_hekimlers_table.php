<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHekimlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hekimlers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('surname',255);
            $table->string('haqqinda',255);
            $table->string('email',255);
            $table->string('password');
            $table->string('avatar')->default('images/avatars/default/doctor.png');
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
        Schema::drop('hekimlers');
    }
}
