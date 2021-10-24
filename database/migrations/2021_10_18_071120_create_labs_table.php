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

        Schema::create('lab_tests', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('lab_id');
            $table->string('test_name');
            $table->timestamps();
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
