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
        // Schema::create('complaints', function (Blueprint $table) {
        //     $table->increments('player_id');
        //     $table->string('complaint_type', 30);
        //     $table->string('complaint_item', 150);
        //     $table->dateTime('complaint_time');
        //     $table->string('principal', 30);
        //     $table->string('progress', 20);
        //     $table->foreign('complaint_type')->references('complaint_type')->on('complaint_types');
        //     $table->foreign('player_id')->references('player_id')->on('player_character');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('complaints');
    }
};
