<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('renttostay_propertys_details', function (Blueprint $table) {
            $table->id();
            $table->string("thumbnail")->nullable();
            $table->string("banner")->nullable();
            $table->string("business_type")->nullable();
            $table->string("suitable_for")->nullable();
            $table->string("property_name")->nullable();
            $table->string("property_address")->nullable();
            $table->string("state")->nullable();
            $table->string("city")->nullable();
            $table->string('area')->nullable();
            $table->string("street")->nullable();
            $table->string("door_number")->nullable();
            $table->string("pincode")->nullable();
            $table->string("room_details")->nullable();
            $table->string("sqf_property")->nullable();
            $table->string("property_age")->nullable();
            $table->string("status")->nullable();
            $table->string("deleted_status")->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renttostay_propertys_details');
    }
};
