<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Diego', 'email' => 'diego@diego.com', 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10), 'first_name' => 'Diego', 'last_name' => 'Martino', 'phone' => '222-2222-2222', 
            'avatar' => 'avatars/avatar-generico.jpg', 'isAdmin' => 1,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Carlitos', 'email' => 'carlos@carlos.com', 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10), 'first_name' => 'Carlos', 'last_name' => 'Lopez', 'phone' => '333-3333-3333', 
            'avatar' => 'avatars/8LQXIChfsrCjo7Uv7sKRcvtMpofTVCOHNDEnFtss.png', 'isAdmin' => 0,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Anita', 'email' => 'ana@ana.com', 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10), 'first_name' => 'Ana', 'last_name' => 'Martinez', 'phone' => '555-5555-5555', 
            'avatar' => 'avatars/SR3a9pgT1XY08HAps4QeoxFgKjhSlFOPQifif6Vi.png', 'isAdmin' => 0,
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ];

        DB::table('users')->insert($users);  
    }
}
