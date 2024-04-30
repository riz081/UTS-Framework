<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummyData = [
            [
                'kode_barang' => 'B001',
                'nama_barang' => 'Kaos Polos',
                'harga_barang' => 50000,
                'deskripsi_barang' => 'Kaos berwarna putih dengan bahan katun',
                'satuan_id' => 1, 
            ],
        ];

        for ($i = 0; $i < 15; $i++) {
            $data = $dummyData[$i % count($dummyData)];
            Barang::create($data);
        }
    }
}
