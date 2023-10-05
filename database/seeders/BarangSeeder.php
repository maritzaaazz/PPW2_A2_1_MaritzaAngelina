<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::factory(10)->create();
        // $barang = Barang::create([
        //     'nama_barang' => "Pasir",
        //     'harga' => 150000,
        //     'stok' => 50,
        //     'id_supplier' => 3
    }
}
