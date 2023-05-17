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
                'jenis_sampah' => 'Logam - A1',
                'harga' => '6000'
            ],
            [
                'jenis_sampah' => 'Logam - A2',
                'harga' => '5000'
            ],
            [
                'jenis_sampah' => 'Logam - A3',
                'harga' => '4000'
            ],
            [
                'jenis_sampah' => 'Logam - A6',
                'harga' => '3500'
            ],
            [
                'jenis_sampah' => 'Logam - BS2',
                'harga' => '5000'
            ],
            [
                'jenis_sampah' => 'Botol - B1',
                'harga' => '4000'
            ],
            [
                'jenis_sampah' => 'Botol - B2',
                'harga' => '3750'
            ],
            [
                'jenis_sampah' => 'Botol - B4',
                'harga' => '2500'
            ],
            [
                'jenis_sampah' => 'Botol - B5',
                'harga' => '5000'
            ],
            [
                'jenis_sampah' => 'Botol - B6',
                'harga' => '3000'
            ],
            [
                'jenis_sampah' => 'Botol - B7',
                'harga' => '3250'
            ],
            [
                'jenis_sampah' => 'Botol - B8',
                'harga' => '3000'
            ],
            [
                'jenis_sampah' => 'Kertas - K1',
                'harga' => '1250'
            ],
            [
                'jenis_sampah' => 'Kertas - K2',
                'harga' => '2000'
            ],
            [
                'jenis_sampah' => 'Kertas - K3',
                'harga' => '1000'
            ],
            [
                'jenis_sampah' => 'Kertas - K4',
                'harga' => '1250'
            ],
            [
                'jenis_sampah' => 'Kertas - K5',
                'harga' => '2250'
            ],
            [
                'jenis_sampah' => 'Kertas - K6',
                'harga' => '3000'
            ],
            [
                'jenis_sampah' => 'Plastik - P1',
                'harga' => '2000'
            ],
            [
                'jenis_sampah' => 'Plastik - P9',
                'harga' => '2250'
            ],
            [
                'jenis_sampah' => 'Plastik - P12',
                'harga' => '1500'
            ],
            [
                'jenis_sampah' => 'Plastik - P14',
                'harga' => '1750'
            ],
            [
                'jenis_sampah' => 'Plastik - P19',
                'harga' => '2000'
            ],
            [
                'jenis_sampah' => 'Plastik - P22',
                'harga' => '2000'
            ],
            [
                'jenis_sampah' => 'Plastik - P26',
                'harga' => '1250'
            ],
            [
                'jenis_sampah' => 'Plastik - P30',
                'harga' => '2000'
            ],
            [
                'jenis_sampah' => 'Plastik - P36',
                'harga' => '1750'
            ],
            [
                'jenis_sampah' => 'Plastik - P37',
                'harga' => '3500'
            ],
        ]);
    }
}
