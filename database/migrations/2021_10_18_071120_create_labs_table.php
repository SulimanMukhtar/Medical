<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('location');
            $table->char('phone');
            $table->string('description');
            $table->binary('image');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });

        Schema::create('TestMenus', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('lab_id');
            $table->string('test_name');
            $table->timestamps();
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
        });
        Schema::create('HomeVisits', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('lab_id');
            $table->string('name');
            $table->string('address');
            $table->char('phone');
            $table->date('date');
            $table->timestamps();
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
        });
        Schema::create('TestResults', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('lab_id');
            $table->unsignedInteger('test_id');
            $table->unsignedInteger('requester');
            $table->string('test_result');
            $table->timestamps();
            $table->foreign('test_id')->references('id')->on('TestMenus')->onDelete('cascade');
            $table->foreign('requester')->references('id')->on('HomeVisits')->onDelete('cascade');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
        });
        Schema::create('labm', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('username');
            $table->char('phone');
            $table->string('address');
            $table->string('password');
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
        Schema::dropIfExists('labs');
    }
}
