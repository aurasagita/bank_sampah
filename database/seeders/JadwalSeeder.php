<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'id'=>'1',
                'id_jadwal'=>'J101',
                'id_nasabah'=>'2',
                'id_sopir'=>'3',
                'tanggal_pengambilan'=>'2023-01-03',
                'konfirmasi'=>'Selesai',
                'created_at'=>'2023-01-01 13:46:21'
            ],
            [
                'id'=>'2',
                'id_jadwal'=>'J102',
                'id_nasabah'=>'1',
                'id_sopir'=>'4',
                'konfirmasi'=>'Selesai',
                'tanggal_pengambilan'=>'2023-01-04',
                'created_at'=>'2023-01-02 13:46:26'
            ],
            [
                'id'=>'3',
                'id_jadwal'=>'J103',
                'id_nasabah'=>'9',
                'id_sopir'=>'2',
                'konfirmasi'=>'Selesai',
                'tanggal_pengambilan'=>'2023-02-28',
                'created_at'=>'2023-02-23 13:48:21'
            ],
            [
                'id'=>'4',
                'id_jadwal'=>'J104',
                'id_nasabah'=>'4',
                'id_sopir'=>'10',
                'konfirmasi'=>'Selesai',
                'tanggal_pengambilan'=>'2023-03-06',
                'created_at'=>'2023-03-01 13:49:21'
            ],
            [
                'id'=>'5',
                'id_jadwal'=>'J105',
                'id_nasabah'=>'6',
                'id_sopir'=>'5',
                'konfirmasi'=>'Selesai',
                'tanggal_pengambilan'=>'2023-04-09',
                'created_at'=>'2023-04-09 13:50:21'
            ],
            [
                'id'=>'6',
                'id_jadwal'=>'J106',
                'id_nasabah'=>'4',
                'id_sopir'=>'3',
                'konfirmasi'=>'Pick Up',
                'tanggal_pengambilan'=>'2023-04-11',
                'created_at'=>'2023-03-10 13:58:21'
            ],
            [
                'id'=>'7',
                'id_jadwal'=>'J107',
                'id_nasabah'=>'2',
                'id_sopir'=>'9',
                'konfirmasi'=>'Menunggu Pick Up',
                'tanggal_pengambilan'=>'2023-04-12',
                'created_at'=>'2023-03-11 10:58:21'
            ],
        ]);
    }
}
