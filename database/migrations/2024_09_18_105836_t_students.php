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
        Schema::create('t_students', function (Blueprint $table) {
            $table->id();
            $table->string('stud_first_name');
            $table->string('stud_last_name');
            $table->string('stud_email');
            $table->string('stud_age');
            $table->string('stud_strand');
            $table->string('stud_grade_level');
            $table->string('stud_section');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_students');
    }
};
