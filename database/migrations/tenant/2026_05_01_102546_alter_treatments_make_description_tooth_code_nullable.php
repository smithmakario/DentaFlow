<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('treatments', function (Blueprint $table) {
            $table->string('description')->nullable()->change();
            $table->string('tooth_code')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('treatments', function (Blueprint $table) {
            $table->string('description')->nullable(false)->change();
            $table->string('tooth_code')->nullable(false)->change();
        });
    }
};
