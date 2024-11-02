<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censorships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained('player_character', 'player_id');
            $table->dateTime('articles_time')->default(now());
            $table->integer('violate_rules');
            $table->foreignId('admin_id')->references('admin_id')->on('admins', 'admin_id');
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
        Schema::dropIfExists('censorships');
    }
};
