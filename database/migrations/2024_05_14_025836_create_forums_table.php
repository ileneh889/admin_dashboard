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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->integer('player_permissions');
            $table->dateTime('submit_time')->default(now());
            $table->string('area', 30);
            $table->string('category', 30);
            $table->integer('article_id');
            $table->string('article_title', 30);
            $table->string('descriptions', 150);
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
        Schema::dropIfExists('forums');
    }
};
