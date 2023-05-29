<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksibaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksibaru')->insert([
            [
                'id'=>'1',
                'id_transaksibaru'=>'J101',
                'id_nasabah'=>'2',
                'id_sopir'=>'3',
                'tanggal_pengambilan'=>'2023-01-03',
                'konfirmasi'=>'Selesai',
                'jenis_sampah'=>'3',
                'berat'=>'3',
                'harga'=>'12000',
                'created_at'=>'2023-01-01 13:46:21'
            ],
            [
                'id'=>'2',
                'id_transaksibaru'=>'J102',
                'id_nasabah'=>'1',
                'id_sopir'=>'4',
                'konfirmasi'=>'Selesai',
                'jenis_sampah'=>'6',
                'berat'=>'2',
                'harga'=>'10000',
                'tanggal_pengambilan'=>'2023-01-04',
                'created_at'=>'2023-01-02 13:46:26'
            ],
            [
                'id'=>'3',
                'id_transaksibaru'=>'J103',
                'id_nasabah'=>'9',
                'id_sopir'=>'2',
                'konfirmasi'=>'Selesai',
                'jenis_sampah'=>'9',
                'berat'=>'5',
                'harga'=>'12500',
                'tanggal_pengambilan'=>'2023-02-28',
                'created_at'=>'2023-02-23 13:48:21'
            ],
            [
                'id'=>'4',
                'id_transaksibaru'=>'J104',
                'id_nasabah'=>'4',
                'id_sopir'=>'10',
                'konfirmasi'=>'Selesai',
                'jenis_sampah'=>'11',
                'berat'=>'1',
                'harga'=>'3000',
                'tanggal_pengambilan'=>'2023-03-06',
                'created_at'=>'2023-03-01 13:49:21'
            ],
            [
                'id'=>'5',
                'id_transaksibaru'=>'J105',
                'id_nasabah'=>'6',
                'id_sopir'=>'5',
                'konfirmasi'=>'Selesai',
                'jenis_sampah'=>'25',
                'berat'=>'2',
                'harga'=>'4000',
                'tanggal_pengambilan'=>'2023-04-09',
                'created_at'=>'2023-04-09 13:50:21'
            ],
            [
                'id'=>'6',
                'id_transaksibaru'=>'J106',
                'id_nasabah'=>'4',
                'id_sopir'=>'3',
                'konfirmasi'=>'Pick Up',
                'jenis_sampah'=>'19',
                'berat'=>'4',
                'harga'=>'12000',
                'tanggal_pengambilan'=>'2023-04-11',
                'created_at'=>'2023-03-10 13:58:21'
            ],
            [
                'id'=>'7',
                'id_transaksibaru'=>'J107',
                'id_nasabah'=>'2',
                'id_sopir'=>'9',
                'konfirmasi'=>'Menunggu Pick Up',
                'jenis_sampah'=>'25',
                'berat'=>'1',
                'harga'=>'2000',
                'tanggal_pengambilan'=>'2023-04-12',
                'created_at'=>'2023-03-11 10:58:21'
            ],
        ]);
    }
}
