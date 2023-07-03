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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('user_full_name');
            $table->string('user_address');
            $table->string('user_phone');
            $table->string('user_email');
            $table->string('user_product_sku');
            $table->string('user_product_description');
            $table->string('user_product_quantity');            
            $table->string('user_product_price');
            $table->string('user_product_total_price');
            
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
        Schema::dropIfExists('orders');
    }
};
