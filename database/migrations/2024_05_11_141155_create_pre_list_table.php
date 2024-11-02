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
        Schema::create('pre_lists', function (Blueprint $table) {
            $table->increments('pre_id')->primary();
            $table->string('pre_name');
            $table->string('quest_level');
            $table->unsignedInteger('user_count');
            $table->decimal('ticket_price', 8, 2);
            $table->integer('available')->default(0);
            $table->time('time_start');
            $table->time('time_end');
            $table->string('note')->nullable();
            $table->timestamps(); // 
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_list');
    }
};
