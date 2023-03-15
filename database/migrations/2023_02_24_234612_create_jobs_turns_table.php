<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jobs_turns', function (Blueprint $table) {
            $table->foreignId('job_id')->references('id')->on('jobs');
            $table->foreignId('turn_id')->references('id')->on('turns');


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs_turns');
    }
};
