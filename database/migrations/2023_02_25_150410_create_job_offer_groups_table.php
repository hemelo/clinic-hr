<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_offer_groups', function (Blueprint $table) {

            $table->foreignId('job_offer_id')->references('id')->on('job_offers')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('group_id')->references('id')->on('job_special_groups')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_offer_groups');
    }
};
