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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('clinician_id');
            $table->foreignId('treatment_id')->nullable()->constrained()->onDelete('cascade');
            $table->dateTime('scheduled_at');
            $table->text('notes')->nullable();
            $table->string('status')->default('pending');
            $table->foreign('patient_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('clinician_id')->on('users')->references('id')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
