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
        Schema::create('adproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('product_cat');
            $table->string('product_brand');
            $table->string('product_title');
            $table->Integer('product_price');
            $table->longText('product_image');
            $table->string('product_keywords');
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
        Schema::dropIfExists('adproducts');
    }
};