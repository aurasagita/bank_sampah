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
                'id'=>'1',
                'name' => 'Admin',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'admin'
            ],
            [
                'id'=>'2',
                'name' => 'Nasabah',
                'email' => 'nasabah1@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'3',
                'name' => 'Sopir',
                'email' => 'sopir1@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
        ]);
    }
}
