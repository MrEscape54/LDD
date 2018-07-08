<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCreditCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
           $table->increments('id');
           $table->string('credit_card_number')->length(20);
           $table->string('credit_card_brand')->length(20);
           $table->integer('credit_card_expm');
           $table->integer('credit_card_expy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('credit_cards');
    }
}
