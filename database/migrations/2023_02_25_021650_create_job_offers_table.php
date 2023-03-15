<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->text('requirements');
            $table->text('proficiency')->nullable();
            $table->text('degree')->nullable();
            $table->boolean('only_for_group')->default(false);
            $table->text('benefits')->nullable();
            $table->boolean('active');
            $table->integer('quantity')->nullable();
            $table->foreignId('job_id')->references('id')->on('jobs');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
