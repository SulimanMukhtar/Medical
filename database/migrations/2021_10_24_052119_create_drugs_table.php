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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('link')->nullable();
            $table->char('phone');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });

        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('pharmacy_id')->unsigned();
            $table->string('name');
            $table->integer('quantity')->unsigned();
            $table->timestamps();
            $table->foreign('pharmacy_id')->references('id')->on('pharmacies')->onDelete('cascade');
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
