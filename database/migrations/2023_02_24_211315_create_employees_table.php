<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('joined_in');
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth_date')->nullable();
            $table->foreignId('job_id')->references('id')->on('jobs');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->boolean('active')->default(true);
            $table->date('fired_on')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
