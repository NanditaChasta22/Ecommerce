<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->unsignedBigInteger('orderUserId');
            
            $table->foreign('orderUserId')->references('id')->on('users')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('orderProductId');
            
            $table->foreign('orderProductId')->references('id')->on('products')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('orderDate');
            $table->integer('orderPrice');
            $table->string('orderStatus');
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
}
