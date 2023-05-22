<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
             'name' => 'Admin',
               'email' => 'admin1@gmail.com',
               'password' => Hash::make('1234'),
                'role' => 'admin'
            ],
            [
                'name' => 'Nasabah',
                'email' => 'nasabah1@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
               'name' => 'Sopir',
               'email' => 'sopir1@gmail.com',
               'password' => Hash::make('1234'),
               'role' => 'sopir'
            ]
        ]);
    }
}
