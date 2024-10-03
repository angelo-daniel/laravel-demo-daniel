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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('event_logo')->nullable();
            $table->string('event_name');
            $table->date('event_date');
            // $table->integer('capacity');
            // $table->decimal('price, 100, 2');
            // $table->float('salary');
            // $table->double('percentage');
            // $table->unsignedBigInteger('prize');
            // $table->unsignedTinyInteger('sdfds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
