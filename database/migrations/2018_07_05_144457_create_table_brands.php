<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTableBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function(Blueprint $table) {
           $table->increments('id');
           $table->string('brand_name')->length(45);
        });

        $brands = [
            'breitling',
            'cartier',
            'longines',
            'montblanc',
            'omega',
            'piaget',
            'rolex',
            'tag',
            'zenith'
            ];

        foreach($brands as $value) {
            DB::table('brands')->insert([
                'brand_name' => $value
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
        Schema::drop('brands');
    }

}
