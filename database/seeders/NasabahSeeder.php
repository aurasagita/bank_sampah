<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nasabah')->insert([
            [
                'id'=>'1',
                'id_nasabah'=>'N101',
                'nama'=>'Salma Annissa A.',
                'alamat'=>'Jl. M. Sujadi 63A',
                'phone'=>'087839597241',
                'created_at'=>'2023-05-12 13:46:21'
            ],
            [
                'id'=>'2',
                'id_nasabah'=>'N102',
                'nama'=>'Tesya Eriana',
                'alamat'=>'Jl. Ngentrong Etan 16A',
                'phone'=>'0812144568910',
                'created_at'=>'2023-05-12 13:46:22',
            ],
            [
                'id'=>'3',
                'id_nasabah'=>'N103',
                'nama'=>'Inthania Nadicika',
                'alamat'=>'Jl. Kuping Gajah 21',
                'phone'=>'089982712334',
                'created_at'=>'2023-05-12 13:46:23',
            ],
            [
                'id'=>'4',
                'id_nasabah'=>'N104',
                'nama'=>'Aura Sagita',
                'alamat'=>'Jl. Kuping Gajah 22',
                'phone'=>'087812345678',
                'created_at'=>'2023-05-12 13:46:24',
            ],
            [
                'id'=>'5',
                'id_nasabah'=>'N105',
                'nama'=>'Mirza Pricillia',
                'alamat'=>'Jl. Soekarno Hatta 33',
                'phone'=>'087812345888',
                'created_at'=>'2023-05-12 13:46:25',
            ],
            [
                'id'=>'6',
                'id_nasabah'=>'N106',
                'nama'=>'Sukma Gladys',
                'alamat'=>'Jl. Kartini 21',
                'phone'=>'087813322341',
                'created_at'=>'2023-05-12 13:46:27',
            ],
            [
                'id'=>'7',
                'id_nasabah'=>'N107',
                'nama'=>'Yisha Zukhrufin',
                'alamat'=>'Jl. Panglima Soedirman 27',
                'phone'=>'0878123411244',
                'created_at'=>'2023-05-12 13:46:28',
            ],
            [
                'id'=>'8',
                'id_nasabah'=>'N108',
                'nama'=>'Prasasty Dara',
                'alamat'=>'Jl. Kembang Kertas 1B',
                'phone'=>'0878123422349',
                'created_at'=>'2023-05-12 13:46:29',
            ],
            [
                'id'=>'9',
                'id_nasabah'=>'N109',
                'nama'=>'Kurniawati',
                'alamat'=>'Jl. Kembang Kertas 30',
                'phone'=>'0878123421111',
                'created_at'=>'2023-05-12 13:46:30',
            ],
            [
                'id'=>'10',
                'id_nasabah'=>'N110',
                'nama'=>'Sofiatul Ayu',
                'alamat'=>'Jl. Kembang Turi 109',
                'phone'=>'082334556880',
                'created_at'=>'2023-05-12 13:46:30'
            ]
        ]);
    }
}
