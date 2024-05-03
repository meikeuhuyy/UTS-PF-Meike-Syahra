<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => '101',
                'nama_barang' => 'Indomilk',
                'harga_barang'=> '60000',
                'deskripsi_barang' => 'minuman susu kemasan',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => '102',
                'nama_barang' => 'Ultramilk',
                'harga_barang'=> '65000',
                'deskripsi_barang' => 'minuman susu kemasan',
                'satuan_id' => 2
            ],
        ]);
    }
}
