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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('admin_email');
            $table->string('carousel_1');
            $table->string('carousel_2');
            $table->string('carousel_3');
            $table->string('carousel_4');
            $table->string('carousel_5');
            $table->string('category_1_name');
            $table->string('category_1_picture');
            $table->string('category_2_name');
            $table->string('category_2_picture');
            $table->string('category_3_name');
            $table->string('category_3_picture');
            $table->string('admin_address');
            $table->string('admin_phone');
            $table->string('admin_facebook');
            $table->string('admin_twitter');
            $table->string('admin_instagram');
            $table->string('admin_linkedin'); 
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
        Schema::dropIfExists('admins');
    }
};
