<?php

namespace Database\Seeders;

use App\Models\Satuan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Satuan::create([
            'kode_satuan' => 'kg',
            'nama_satuan' => 'Kilogram',
        ]);

        Satuan::create([
            'kode_satuan' => 'pcs',
            'nama_satuan' => 'Pieces',
        ]);
    }
}
