<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->unsignedInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->unsignedInteger('categrory_id');
            $table->foreign('categrory_id')->references('id')->on('categories');

            $table->unsignedInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres');

            $table->longText('description');
            $table->decimal('price');
            $table->boolean('isAvailable');
            $table->string('picture', 255);

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
