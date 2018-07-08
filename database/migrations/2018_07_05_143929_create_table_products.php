<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->integer('id')->increment();
           $table->integer('brand_id');
           $table->integer('type_id');
           $table->integer('genre_id');
           $table->string('description')->length(300);
           $table->integer('price');
           $table->integer('is_available');
           $table->string('picture')->length(45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
