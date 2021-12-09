<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->binary('image');
            $table->string('university');
            $table->string('specialist');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('address');
            $table->char('phone');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('Doc_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->char('phone');
            $table->string('address');
            $table->date('date');
            $table->string('gender');
            $table->string('status')->default('NotCompleted');
            $table->timestamps();
            $table->foreign('Doc_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
