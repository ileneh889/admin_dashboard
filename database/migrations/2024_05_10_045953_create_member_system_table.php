<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_account')->nullable(false)->default('');
            $table->string('admin_password')->nullable(false)->default('');
            $table->string('admin_name')->nullable(false)->default('');
            $table->string('admin_email');
            $table->timestamp('last_login_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('permission_level')->default(-1);
        });

        Schema::create('player_character', function (Blueprint $table) {
            $table->id('player_id');
            $table->string('player_account', 50)->nullable(false)->default('');
            $table->string('player_password', 15)->nullable(false)->default('');
            $table->string('player_name', 50)->nullable(false)->default('');
            $table->string('player_email', 50)->default('');
            $table->timestamp('create_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('last_login_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('login_address', 50)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
        Schema::dropIfExists('player_character');
    }
};
