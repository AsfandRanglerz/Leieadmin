<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('street_name')->nullable();
            $table->text('street_number')->nullable();
            $table->text('zip_code')->nullable();
            $table->text('city')->nullable();
            $table->text('commune')->nullable();
            $table->text('usage_number')->nullable();
            $table->text('farm_number')->nullable();
            $table->text('fixed_number')->nullable();
            $table->text('section_number')->nullable();
            $table->text('property_name')->nullable();
            $table->text('property_description')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
