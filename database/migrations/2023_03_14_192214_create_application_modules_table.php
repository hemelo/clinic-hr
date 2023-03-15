<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('application_modules', function (Blueprint $table) {
            $table->string('module')->primary();
            $table->string('description')->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('application_modules');
    }
};
