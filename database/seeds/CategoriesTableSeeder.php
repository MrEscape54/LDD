<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Deportivo', 
            'Automático', 
            'Cronógrafo', 
            'Buceo', 
            'Smart', 
            'Vintage',
            ];
    
            foreach ($categories as $category) {
    
                DB::table('categories')->insert([
                    'category_name' => $category,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
    }
}
