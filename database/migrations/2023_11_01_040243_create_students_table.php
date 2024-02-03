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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('admission_number');
            $table->string('roll_number');
            $table->string('class');
            $table->string('gender');
            $table->string('mobile_number');
            $table->string('admission_date');
            $table->string('profile_picture');
            $table->string('blood_group');
            $table->string('status');
            $table->string('email');
            $table->string('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
