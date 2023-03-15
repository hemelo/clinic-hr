<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('evaluation_proficiency', function (Blueprint $table) {
            $table->foreignId('evaluation_id')->references('id')->on('evaluation');
            $table->foreignId('proficiency_id')->references('id')->on('proficiency');
            $table->unsignedDouble('points', 2, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluation_proficiency');
    }
};
