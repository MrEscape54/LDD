<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTableTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function(Blueprint $table) {
           $table->increments('id');
           $table->string('type_name')->length(45);
        });

        $types = [
            'deportivo',
            'automatico',
            'cronografo',
            'buceo',
            'smart',
            'vintage'
        ];

        foreach ($types as $type) {
            DB::table('types')->insert([
               'type_name' => $type
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('types');
    }
}
