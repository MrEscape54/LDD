<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id')
                ->unique();
            $table->string('firs_name')
                ->nullable();
            $table->string('last_name')
                ->nullable();
            $table->string('email')
                ->unique();
            $table->string('password')->length(255);
            $table->string('address')
                ->nullable();
            $table->integer('phone')
                ->nullable();
            $table->integer('credit_card_id')
                ->nullable();
            $table->string('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
