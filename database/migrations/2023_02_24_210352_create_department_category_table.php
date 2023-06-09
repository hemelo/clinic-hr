<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('department_category', function (Blueprint $table) {
            $table->id();
            $table->string('category')->unique();
            $table->string('description');
            $table->boolean('active')->default(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('department_category');
    }
};
