<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('improvement_plan', function (Blueprint $table) {

            $table->foreignId('evaluation_id')->references('id')->on('evaluation');
            $table->foreignId('status_id')->references('id')->on('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('improvement_plan');
    }
};
