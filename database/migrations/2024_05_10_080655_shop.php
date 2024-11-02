<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shop_product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 50)->nullable(false);
            $table->string('product_desc', 100)->nullable();
            $table->integer('price')->nullable();
            $table->string('category', 20)->nullable();
            $table->longText('image')->nullable();
            $table->string('onshelf_status', 20)->nullable();
            $table->timestamps();
        });

        Schema::create('inventory_management', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_product_id');
            $table->date('inventory_date')->nullable();
            $table->integer('inventory_purchased')->nullable();
            $table->foreign('fk_product_id')->references('id')->on('shop_product');
            $table->timestamps();
        });

        // 修改資料表欄位
        // Schema::table('inventory_management', function ($table) {
        //     $table->string('name', 50)->change();
        // });

        // Schema::create('shop_payment', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('fk_player_id');
        //     $table->timestamp('transaction_date');
        //     $table->string('transaction_status', 20);
        //     $table->string('coupon_used', 20);
        //     $table->unsignedBigInteger('fk_coupon_id')->nullable();
        //     $table->foreign('fk_player_id')->references('player_id')->on('player_character');
        //     $table->foreign('fk_coupon_id')->references('id')->on('coupon');
        // });

        // Schema::create('payment_details', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('fk_payment_id');
        //     $table->unsignedBigInteger('fk_product_id');
        //     $table->integer('quantity');
        //     $table->foreign('fk_payment_id')->references('id')->on('shop_payment');
        //     $table->foreign('fk_product_id')->references('id')->on('shop_product');
        // });

        // Schema::create('coupon', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('coupon_name', 50)->nullable(false);
        //     $table->string('coupon_desc', 100)->nullable();
        //     $table->dateTime('expiration_date');
        //     $table->integer('discount_amount');
        // });

        // Schema::create('get_coupon', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('fk_player_id');
        //     $table->unsignedBigInteger('fk_coupon_id');
        //     $table->dateTime('gettime');
        //     $table->foreign('fk_player_id')->references('player_id')->on('player_character');
        //     $table->foreign('fk_coupon_id')->references('id')->on('coupon');
        // });

        // Schema::create('recharge', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('fk_player_id');
        //     $table->timestamp('transaction_date');
        //     $table->integer('amount');
        //     $table->integer('recharge_status');
        //     $table->string('fk_methods', 20);
        //     $table->integer('recharged_diamond');
        //     $table->foreign('fk_player_id')->references('player_id')->on('player_character');
        //     $table->foreign('fk_methods')->references('PK_method_id')->on('payment_method');
        // });

        // Schema::create('diamond', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('diamond_name', 20);
        //     $table->integer('diamond_amount');
        //     $table->string('image_url', 100);
        //     $table->integer('price');
        // });

        // Schema::create('shop_wishlist', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('fk_product_id');
        //     $table->unsignedBigInteger('fk_player_id');
        //     $table->foreign('fk_product_id')->references('id')->on('shop_product');
        //     $table->foreign('fk_player_id')->references('player_id')->on('player_character');
        // });

        // Schema::create('shop_cart', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('fk_product_id');
        //     $table->integer('quantity');
        //     $table->unsignedBigInteger('fk_player_id');
        //     $table->foreign('fk_product_id')->references('id')->on('shop_product');
        //     $table->foreign('fk_player_id')->references('player_id')->on('player_character');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('shop_cart');
        // Schema::dropIfExists('shop_wishlist');
        // Schema::dropIfExists('diamond');
        // Schema::dropIfExists('recharge');
        // Schema::dropIfExists('get_coupon');
        // Schema::dropIfExists('coupon');
        // Schema::dropIfExists('payment_details');
        // Schema::dropIfExists('shop_payment');
        Schema::dropIfExists('inventory_management');
        Schema::dropIfExists('shop_product');
    }
};
