<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_properties', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('landlord_id')->unsigned();
        $table->integer('categories_id')->unsigned();
        $table->foreign('landlord_id')->references('id')->on('landlord');
        $table->foreign('categories_id')->references('id')->on('categories_properties');
        $table->enum('conditions', ['Fully furnished', 'Semi furnished', 'Unfurnished']);
        $table->enum('bedrooms', ['1','2','3','4']);
        $table->integer('location_id')->unsigned();
        $table->string('rental_price');
        $table->string('description');
        $table->string('address');
        $table->string('images');
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
        Schema::drop('post_properties');
    }
}
