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
        Schema::create('adorderinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_user');
            $table->string('first_name');
            $table->string('email');
            $table->string('address');
            $table->Integer('jumlah_produk');
            $table->Integer('total_harga');
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
        Schema::dropIfExists('adorderinfos');
    }
};
