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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();
            $table->unsignedBigInteger('job_title_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('country_id');

            $table->foreign('job_title_id')->references('id')->on('job_title')->onDelete('restrict');
            $table->foreign('department_id')->references('id')->on('department')->onDelete('restrict');
            $table->foreign('country_id')->references('id')->on('country')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
