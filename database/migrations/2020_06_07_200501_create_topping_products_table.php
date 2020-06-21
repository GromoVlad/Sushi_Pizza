<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToppingProductsTable extends Migration
{
    public function up()
    {
        Schema::create('topping_products', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('product_id');
            $table->smallInteger('topping_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('topping_products');
    }
}
