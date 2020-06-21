<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToppingsTable extends Migration
{
    public function up()
    {
        Schema::create('toppings', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('category_id');
            $table->string('name');
            $table->double('price')->default(0);
            $table->smallInteger('weight')->default(0);
            $table->timestamps();
        });

        (new ToppingSeeder)->run();
    }

    public function down()
    {
        Schema::dropIfExists('toppings');
    }
}
