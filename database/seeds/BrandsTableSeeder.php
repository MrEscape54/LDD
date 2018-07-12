<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            'Breget', 
            'Breitling', 
            'Cartier', 
            'Longines', 
            'MontBlanc', 
            'Omega', 
            'Piaget', 
            'Rolex', 
            'Tag Heuer', 
            'Zenith'
        ];

        foreach ($brands as $brand) {

            DB::table('brands')->insert([
                'brand_name' => $brand,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
