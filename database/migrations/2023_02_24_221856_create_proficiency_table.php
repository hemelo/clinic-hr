<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('proficiency', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->boolean('active')->default(true);
            $table->foreignId('group_id')->references('id')->on('proficiency_group');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proficiency');
    }
};
