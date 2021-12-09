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
            $table->string('address');
            $table->char('phone');
            $table->string('email');
            $table->string('password');
            $table->string('username');
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
        Schema::create('patients', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->unsignedInteger('lab_id');
            $table->string('name');
            $table->string('address');
            $table->char('phone');
            $table->string('test_name');
            $table->string('pid')->nullable()->unique();
            $table->date('date')->nullable();
            $table->timestamps();
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
        });
        Schema::create('TestResults', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('lab_id');
            $table->string('requester');
            $table->string('test_result');
            $table->timestamps();
            $table->foreign('requester')->references('pid')->on('patients')->onDelete('cascade');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
