<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_objects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');

            $table->string('rental_object')->nullable();
            $table->string('appartment_number')->nullable();
            $table->string('property_number')->nullable();
            $table->string('size_useable_area')->nullable();
            $table->integer('number_of_bathrooms')->nullable();
            $table->integer('number_of_bedrooms')->nullable();
            $table->integer('number_of_kitchen')->nullable();
            $table->integer('number_of_parking')->nullable();
            $table->string('number_of_parking_other')->nullable();
            $table->integer('number_of_stalls')->nullable();
            $table->integer('story')->nullable();
            $table->integer('total_rooms')->nullable();
            $table->integer('number_of_keys_in_parking_space')->nullable();
            $table->integer('number_of_remotes')->nullable();
            $table->integer('share_bethroom_people')->nullable();
            $table->integer('share_kitchen_people')->nullable();
            $table->integer('share_living_room_common_area_people')->nullable();
            $table->string('internet')->nullable();
            $table->string('cable')->nullable();
            $table->string('smoking')->nullable();
            $table->string('pets')->nullable();
            $table->text('house_role')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('electricity_heating')->nullable();
            $table->string('water_wastewater')->nullable();
            $table->string('name')->nullable();
            $table->string('room_and_other')->nullable();
            $table->string('size_m2_room')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('rental_objects');
    }
}
