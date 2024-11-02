<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forword_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->references('player_id')->on('player_character');
            $table->integer('collection_count');
            $table->integer('forword_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forword_records');
    }
};
