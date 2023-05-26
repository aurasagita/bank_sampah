<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sampah')->insert([
            [
                'id' => '1',
                'jenis_sampah' => 'Logam - A1',
                'harga' => '6000'
            ],
            [
                'id' => '2',
                'jenis_sampah' => 'Logam - A2',
                'harga' => '5000'
            ],
            [
                'id' => '3',
                'jenis_sampah' => 'Logam - A3',
                'harga' => '4000'
            ],
            [
                'id' => '4',
                'jenis_sampah' => 'Logam - A6',
                'harga' => '3500'
            ],
            [
                'id' => '5',
                'jenis_sampah' => 'Logam - BS1',
                'harga' => '6000'
            ],
            [
                'id' => '6',
                'jenis_sampah' => 'Logam - BS2',
                'harga' => '5000'
            ],
            [
                'id' => '7',
                'jenis_sampah' => 'Botol - B1',
                'harga' => '4000'
            ],
            [
                'id' => '8',
                'jenis_sampah' => 'Botol - B2',
                'harga' => '3750'
            ],
            [
                'id' => '9',
                'jenis_sampah' => 'Botol - B4',
                'harga' => '2500'
            ],
            [
                'id' => '10',
                'jenis_sampah' => 'Botol - B5',
                'harga' => '5000'
            ],
            [
                'id' => '11',
                'jenis_sampah' => 'Botol - B6',
                'harga' => '3000'
            ],
            [
                'id' => '12',
                'jenis_sampah' => 'Botol - B7',
                'harga' => '3250'
            ],
            [
                'id' => '13',
                'jenis_sampah' => 'Botol - B8',
                'harga' => '3000'
            ],
            [
                'id' => '14',
                'jenis_sampah' => 'Kertas - K1',
                'harga' => '1250'
            ],
            [
                'id' => '15',
                'jenis_sampah' => 'Kertas - K2',
                'harga' => '2000'
            ],
            [
                'id' => '16',
                'jenis_sampah' => 'Kertas - K3',
                'harga' => '1000'
            ],
            [
                'id' => '17',
                'jenis_sampah' => 'Kertas - K4',
                'harga' => '1250'
            ],
            [
                'id' => '18',
                'jenis_sampah' => 'Kertas - K5',
                'harga' => '2250'
            ],
            [
                'id' => '19',
                'jenis_sampah' => 'Kertas - K6',
                'harga' => '3000'
            ],
            [
                'id' => '20',
                'jenis_sampah' => 'Plastik - P1',
                'harga' => '2000'
            ],
            [
                'id' => '21',
                'jenis_sampah' => 'Plastik - P9',
                'harga' => '2250'
            ],
            [
                'id' => '22',
                'jenis_sampah' => 'Plastik - P12',
                'harga' => '1500'
            ],
            [
                'id' => '23',
                'jenis_sampah' => 'Plastik - P14',
                'harga' => '1750'
            ],
            [
                'id' => '24',
                'jenis_sampah' => 'Plastik - P19',
                'harga' => '2000'
            ],
            [
                'id' => '25',
                'jenis_sampah' => 'Plastik - P22',
                'harga' => '2000'
            ],
            [
                'id' => '26',
                'jenis_sampah' => 'Plastik - P26',
                'harga' => '1250'
            ],
            [
                'id' => '27',
                'jenis_sampah' => 'Plastik - P30',
                'harga' => '2000'
            ],
            [
                'id' => '28',
                'jenis_sampah' => 'Plastik - P36',
                'harga' => '1750'
            ],
            [
                'id' => '29',
                'jenis_sampah' => 'Plastik - P37',
                'harga' => '3500'
            ],
        ]);
    }
}
