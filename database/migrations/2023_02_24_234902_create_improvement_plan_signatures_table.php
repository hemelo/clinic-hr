<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('improvement_plan_signatures', function (Blueprint $table) {

            $table->foreignId('evaluation_id')->references('id')->on('evaluation')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('signature_id')->references('id')->on('signatures')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('improvement_plan_signatures');
    }
};
