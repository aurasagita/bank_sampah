<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SopirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sopir')->insert([
            [
                'id' => '1',
                'id_sopir' => 'SP101',
                'nama' => 'Ahmad Rifky',
                'alamat' => 'Jl. KeBayoran No.3',
                'phone' => '082456332778',
                'email'=>'sopir1@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '2',
                'id_sopir' => 'SP102',
                'nama' => 'Mahardhika Bredi D.',
                'alamat' => 'Jl. Mayang Kusuma No.5',
                'phone' => '085674334534',
                'email'=>'sopir2@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '3',
                'id_sopir' => 'SP103',
                'nama' => 'Patria Anggara',
                'alamat' => 'Jl. Pisang Kipas No.6',
                'phone' => '087654234567',
                'email'=>'sopir3@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '4',
                'id_sopir' => 'SP104',
                'nama' => 'Muhammad Nadi Rafli',
                'alamat' => 'Jl. Werkudara No.7',
                'phone' => '082345654123',
                'email'=>'sopir4@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '5',
                'id_sopir' => 'SP105',
                'nama' => 'Rambimo Regeng P.',
                'alamat' => 'Jl. Pattimura No.9',
                'phone' => '087654345289',
                'email'=>'sopir5@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '6',
                'id_sopir' => 'SP106',
                'nama' => 'Sabilla Lutfi ',
                'alamat' => 'Jl. Sayuti Melik no.5',
                'phone' => '08234678987',
                'email'=>'sopir6@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '7',
                'id_sopir' => 'SP107',
                'nama' => 'Rizky Angkata P.S',
                'alamat' => 'Jl. Angkasa Raya No.7',
                'phone' => '081256776543',
                'email'=>'sopir7@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '8',
                'id_sopir' => 'SP108',
                'nama' => 'Dhiyauddin Firmansyah',
                'alamat' => 'Jl. Ahmad Yani No. 8',
                'phone' => '081567345987',
                'email'=>'sopir8@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '9',
                'id_sopir' => 'SP109',
                'nama' => 'Ahmad Tito',
                'alamat' => 'Jl. Simpang Lima No.10',
                'phone' => '086754342562',
                'email'=>'sopir9@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => '10',
                'id_sopir' => 'SP110',
                'nama' => 'Fiki Suganda',
                'alamat' => 'Jl. Ahmad Yani No.12',
                'phone' => '082123123345',
                'email'=>'sopir10@gmail.com',
                'password' => Hash::make('1234'),
            ],
        ]);
    }
    
}
