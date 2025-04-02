<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('national_id')->unique();
            $table->string('tsc_number')->unique();
            $table->enum('gender', ['Male', 'Female']);
            $table->date('date_of_birth');
            $table->string('qualification');
            $table->string('subject_specialization');
            $table->enum('employment_type', ['Permanent', 'Contract']);
            $table->date('date_of_employment');
            $table->string('address');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
