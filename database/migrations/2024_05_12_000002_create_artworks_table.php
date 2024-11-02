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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('submit_date')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->string('image_path', 100);
            $table->foreign('user_id')->references('player_id')->on('player_character')->onDelete('set null');
            // $table->foreign('category_id')->references('category_id')->on('artwork_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};


// Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut officiis fuga aliquid voluptatum esse quod dolore quam, vero, hic expedita numquam, corporis unde natus eos.
