<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CreditCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credit_cards = [
            ['credit_card_number' => '4618261120511757', 
            'credit_card_brand' => 'VISA', 
            'credit_card_expm' => 10, 
            'credit_card_expy' => 19, 
            'user_id' => 1,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],

            ['credit_card_number' => '5454351604702446', 
            'credit_card_brand' => 'MASTER', 
            'credit_card_expm' => 9,
            'credit_card_expy' => 20,
            'user_id' => 1,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],

            ['credit_card_number' => '4217275781288765', 
            'credit_card_brand' => 'AMEX', 
            'credit_card_expm' => 3,
            'credit_card_expy' => 21,
            'user_id' => 2,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ];

        DB::table('credit_cards')->insert($credit_cards);  
    }
}
