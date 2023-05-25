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
            //SEEDER NASABAH
            [
                'id'=>'2',
                'name' => 'Nasabah',
                'email' => 'nasabah1@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'3',
                'name' => 'Nasabah',
                'email' => 'nasabah2@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'4',
                'name' => 'Nasabah',
                'email' => 'nasabah3@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'5',
                'name' => 'Nasabah',
                'email' => 'nasabah4@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'6',
                'name' => 'Nasabah',
                'email' => 'nasabah5@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'7',
                'name' => 'Nasabah',
                'email' => 'nasabah6@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'8',
                'name' => 'Nasabah',
                'email' => 'nasabah7@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'9',
                'name' => 'Nasabah',
                'email' => 'nasabah8@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'10',
                'name' => 'Nasabah',
                'email' => 'nasabah9@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            [
                'id'=>'11',
                'name' => 'Nasabah',
                'email' => 'nasabah10@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'nasabah'
            ],
            //SEEDER SOPIR
            [
                'id'=>'12',
                'name' => 'Sopir',
                'email' => 'sopir1@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'13',
                'name' => 'Sopir',
                'email' => 'sopir2@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'14',
                'name' => 'Sopir',
                'email' => 'sopir3@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'15',
                'name' => 'Sopir',
                'email' => 'sopir4@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'16',
                'name' => 'Sopir',
                'email' => 'sopir5@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'17',
                'name' => 'Sopir',
                'email' => 'sopir6@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'18',
                'name' => 'Sopir',
                'email' => 'sopir7@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'19',
                'name' => 'Sopir',
                'email' => 'sopir8@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'20',
                'name' => 'Sopir',
                'email' => 'sopir9@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
            [
                'id'=>'21',
                'name' => 'Sopir',
                'email' => 'sopir10@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'sopir'
            ],
        ]);
    }
}
