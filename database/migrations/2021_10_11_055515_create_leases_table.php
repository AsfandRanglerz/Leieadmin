<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->unsignedBigInteger('rental_object_id');
            $table->foreign('rental_object_id')->references('id')->on('rental_objects')->onDelete('cascade');
            $table->string('language')->nullable();
            $table->string('rental_act')->nullable();
            $table->string('agreement_type')->nullable();
            $table->string('start_date_of_agreement')->nullable();
            $table->string('end_date_of_agreement')->nullable();
            $table->text('rental_peroid')->nullable();
            $table->string('binding_peroid')->nullable();
            $table->string('notice_peroid')->nullable();
            $table->text('house_role')->nullable();
            $table->text('special_term')->nullable();
            $table->string('rent_out_as')->nullable();
            $table->string('rent_per_month')->nullable();
            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->string('due_date')->nullable();
            $table->string('rent_due')->nullable();
            $table->string('payment_for_first_rent')->nullable();
            $table->string('lease_security')->nullable();
            $table->string('number_of_months_deposit')->nullable();
            $table->string('custom_deposit_amount')->nullable();
            $table->string('deposit_account')->nullable();
            $table->string('no_account')->nullable();
            $table->string('altDeposit')->nullable();
            $table->string('tenant_deposit_guarantee')->nullable();
            $table->string('complete_status')->nullable();
            $table->string('tanant_complete_status')->nullable();
            $table->string('tenant_signature')->nullable();
            $table->string('landlord_signature')->nullable();
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
        Schema::dropIfExists('leases');
    }
}
