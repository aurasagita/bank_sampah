<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            [
                'id'=>'1',
                'id_jadwal'=>'1',
                'jenis_sampah'=>'4',
                'berat'=>'2',
                'harga'=>'3000',
                'created_at'=>'2023-05-08 23:44:00'
            ],
            [
                'id'=>'2',
                'id_jadwal'=>'2',
                'jenis_sampah'=>'6',
                'berat'=>'4',
                'harga'=>'12000',
                'created_at'=>'2023-05-10 23:44:00'
            ],
            [
                'id'=>'3',
                'id_jadwal'=>'2',
                'jenis_sampah'=>'26',
                'berat'=>'8',
                'harga'=>'10000',
                'created_at'=>'2023-05-10 23:44:00'
            ],
            [
                'id'=>'4',
                'id_jadwal'=>'3',
                'jenis_sampah'=>'3',
                'berat'=>'2',
                'harga'=>'10000',
                'created_at'=>'2023-05-15 23:44:00'
            ],
            [
                'id'=>'5',
                'id_jadwal'=>'4',
                'jenis_sampah'=>'14',
                'berat'=>'4',
                'harga'=>'5000',
                'created_at'=>'2023-05-11 23:44:50'
            ],
            [
                'id'=>'6',
                'id_jadwal'=>'5',
                'jenis_sampah'=>'30',
                'berat'=>'2',
                'harga'=>'10000',
                'created_at'=>'2023-05-12 23:44:00'
            ],
            [
                'id'=>'7',
                'id_jadwal'=>'5',
                'jenis_sampah'=>'33',
                'berat'=>'1',
                'harga'=>'20000',
                'created_at'=>'2023-05-12 23:44:00'
            ],
        ]);
    }
}