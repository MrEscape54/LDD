<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = [
        'Deportivo', 
        'Automático', 
        'Cronógrafo', 
        'Buceo', 
        'Smart', 
        'Vintage',
        ];

        foreach ($collections as $collection) {

            DB::table('collections')->insert([
                'collection_name' => $collection,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
