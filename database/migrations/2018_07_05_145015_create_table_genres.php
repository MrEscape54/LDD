<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTableGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function(Blueprint $table) {
           $table->increments('id');
           $table->string('genre_name')->length(1);
        });

        $genres = [
            'm',
            'f',
            'u'
        ];

        foreach ($genres as $value) {
            DB::table('genres')->insert([
                'genre_name' => $value
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
        Schema::drop('genres');
    }
}
