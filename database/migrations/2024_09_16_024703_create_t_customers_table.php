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
        Schema::create('t_customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_first_name');
            $table->string('cus_last_name');
            $table->string('cus_email');
            $table->string('cus_phone_number');
            $table->string('cus_address');
            $table->string('cus_city');
            $table->string('cus_state');
            $table->string('cus_postal_code');
            $table->string('cus_country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_customers');
    }
};
