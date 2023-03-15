<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->id();
            $table->string('description')->unique();
            $table->string('starts_at', 2);
            $table->string('ends_at', 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('turns');
    }
};
