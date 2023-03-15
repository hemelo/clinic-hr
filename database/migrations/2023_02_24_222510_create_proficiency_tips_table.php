<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('proficiency_tips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proficiency_group_id')->references('id')->on('proficiency_group');
            $table->foreignId('proficiency_id')->references('id')->on('proficiency');
            $table->string('description');
            $table->string('example')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proficiency_tips');
    }
};
