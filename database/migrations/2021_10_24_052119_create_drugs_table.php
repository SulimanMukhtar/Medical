<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('location');
            $table->char('phone');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });

        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('pharma_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->foreign('pharma_id')->references('id')->on('pharmacies')->onDelete('cascade');
        });

        Schema::create('phms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('pharma_id')->unsigned()->nullable();
            $table->foreign('pharma_id')->references('id')->on('pharmacies')->onDelete('cascade');
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
        Schema::dropIfExists('drugs');
    }
}
