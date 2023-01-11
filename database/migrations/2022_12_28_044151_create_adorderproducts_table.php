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
        Schema::create('adorderproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('order_pro_id');
            $table->Integer('order_id');
            $table->Integer('product_id');
            $table->Integer('qty');
            $table->Integer('jml');
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
        Schema::dropIfExists('adorderproducts');
    }
};
