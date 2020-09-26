<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeProductsTable extends Migration
{
    public function up()
    {
        Schema::create('size_products', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('category_id');
            $table->smallInteger('product_id');
            $table->string('size')->nullable();
            $table->double('price')->default(0);
            $table->double('weight')->default(0);
            $table->timestamps();
        });

        (new SizeProductSeeder)->run();
    }

    public function down()
    {
        Schema::dropIfExists('size_products');
    }
}
