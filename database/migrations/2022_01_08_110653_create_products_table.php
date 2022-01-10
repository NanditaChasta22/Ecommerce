<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->unsignedBigInteger('productCategoryId');
            
            $table->foreign('productCategoryId')->references('id')->on('categories')->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->integer('productPrice');
            $table->string('productDescription');
             $table->string('productImg');
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
        Schema::dropIfExists('products');
    }
}
