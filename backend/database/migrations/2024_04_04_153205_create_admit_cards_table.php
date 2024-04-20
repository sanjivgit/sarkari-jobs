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
        Schema::create('admit_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('content_id');
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('state_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admit_cards');
    }
};
