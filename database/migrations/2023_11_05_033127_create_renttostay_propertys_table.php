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
        Schema::create('renttostay_propertys', function (Blueprint $table) {
            $table->id();
            $table->string("thumbnail");
            $table->string("banner");
            $table->string("business-type");
            $table->string("suitable-for");
            $table->string("property-name");
            $table->string("property-address");
            $table->string("state");
            $table->string("city");
            $table->string('area');
            $table->string("street");
            $table->string("door-number");
            $table->string("pincode");
            $table->string("room-details");
            $table->string("sqf-property");
            $table->string("property-age");
            $table->string("status");
            $table->string("deleted-status");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renttostay_propertys');
    }
};
