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
        Schema::create('renttostay_suitable_fors', function (Blueprint $table) {
            $table->id();
            $table->string("suitable_for")->nullable();
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
        Schema::dropIfExists('renttostay_suitable_fors');
    }
};
