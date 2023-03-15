<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('role_type', function (Blueprint $table) {
            $table->id();
            $table->string('role_type')->nullable();
            $table->timestamps();
        });

        DB::table('role_type')->insert([
            ['role_type' => 'ADMIN'],
            ['role_type' => 'SUPER_ADMIN'],
            ['role_type' => 'NORMAL_USER'],
            ['role_type' => 'EMPLOYEE']
        ]);

    }

    public function down(): void
    {
        Schema::dropIfExists('role_type');
    }
};
