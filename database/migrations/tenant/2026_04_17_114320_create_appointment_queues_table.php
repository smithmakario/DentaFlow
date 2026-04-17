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
        Schema::create('appointment_queues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('clinician_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('position');
            $table->foreign('clinician_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('patient_id')->on('users')->references('id')->onDelete('cascade');
            $table->string('status')->default('queued');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_queues');
    }
};
