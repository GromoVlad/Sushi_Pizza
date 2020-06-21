<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('category_id');
            $table->string('name');
            $table->double('price')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        (new ProductSeeder)->run();
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
