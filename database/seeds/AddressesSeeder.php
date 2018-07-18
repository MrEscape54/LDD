<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            ['city' => 'CABA', 
            'province' => 'CABA', 
            'country' => 'Argentina',
            'zipcode' => 1028, 
            'user_id' => 1,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],

            ['city' => 'Olivos', 
            'province' => 'Buenos Aires', 
            'country' => 'Argentina',
            'zipcode' => 1043, 
            'user_id' => 2,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ];

        DB::table('addresses')->insert($addresses);  
    }
}
