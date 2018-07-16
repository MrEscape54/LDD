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
            ['name' => 'Josecito', 'email' => 'jose@jose.com', 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10), 'first_name' => 'Jose', 'last_name' => 'Perez', 'phone' => '222-2222-2222', 
            'avatar' => 'img/fotosPerfil/avatar-generico.jpg',
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Carlitos', 'email' => 'carlos@carlos.com', 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10), 'first_name' => 'Carlos', 'last_name' => 'Lopez', 'phone' => '333-3333-3333', 
            'avatar' => 'img/fotosPerfil/user1.png',
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Juancito', 'email' => 'juan@juan.com', 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10), 'first_name' => 'Juan', 'last_name' => 'Martinez', 'phone' => '555-5555-5555', 
            'avatar' => 'img/fotosPerfil/user2.png',
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ];

        DB::table('users')->insert($users);  
    }
}
