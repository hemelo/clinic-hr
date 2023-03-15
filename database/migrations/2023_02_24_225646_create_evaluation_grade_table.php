<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('evaluation_grade', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->text('observation');
            $table->unsignedDouble('points', 2, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluation_grade');
    }
};
