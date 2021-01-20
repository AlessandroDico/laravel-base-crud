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
            // cosi creiamo le colonne del nostro database
            $table->id();
            $table->string('brand', 30);
            $table->string('fabric', 40);
            $table->string('color', 40);
            $table->string('size', 10);
            $table->string('length', 40)->nullable();
            $table->string('model', 40);
            $table->decimal('price', 8,2);
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
