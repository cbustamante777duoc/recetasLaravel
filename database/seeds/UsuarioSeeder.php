<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Lisa',
            'email' => 'correo@correo.com',
            'password' => Hash::make('abcd1234'),
            'url' => 'https://www.instagram.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jennie',
            'email' => 'correo2@correo.com',
            'password' => Hash::make('abcd1234'),
            'url' => 'https://www.instagram.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rose',
            'email' => 'correo3@correo.com',
            'password' => Hash::make('abcd1234'),
            'url' => 'https://www.instagram.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jisoo',
            'email' => 'correo4@correo.com',
            'password' => Hash::make('abcd1234'),
            'url' => 'https://www.instagram.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);



    }
}
