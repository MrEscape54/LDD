<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre_name' => 'M',
        ]);

        DB::table('genres')->insert([
            'genre_name' => 'F',
        ]);
    }
}
