<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_offers_signatures', function (Blueprint $table) {

            $table->foreignId('job_offer_id')->references('id')->on('job_offers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('signature_id')->references('id')->on('signatures')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_offers_signatures');
    }
};
