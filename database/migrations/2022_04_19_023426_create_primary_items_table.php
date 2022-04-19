<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimaryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('primary_id')->unsigned();
            $table->string('cover_image');
            $table->timestamps();
        });

        Schema::table('primary_items', function ($table) {
            $table->foreign('primary_id')->references('id')->on('primaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('primary_items');
    }
}