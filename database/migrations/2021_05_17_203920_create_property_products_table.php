<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('property_products', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('property_id');
        //     $table->unsignedBigInteger('product_id');
        //     $table->foreign('property_id')
        //         ->references('id')->on('properties')
        //         ->onDelete('cascade');
        //     $table->foreign('product_id')
        //         ->references('id')->on('products')
        //         ->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('property_products');
    }
}
