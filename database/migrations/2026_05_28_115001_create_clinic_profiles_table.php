<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clinic_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_id');
            $table->string('clinic_name');
            $table->text('description')->nullable();
            $table->binary('logo')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('specialization')->nullable();
            $table->integer('branch_no')->nullable();
            $table->string('sub_type');
            $table->string('status')->default('active');
            $table->foreign('tenant_id')->on('tenants')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_profiles');
    }
};
