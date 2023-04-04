<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book')->insert([
            'kode_buku' => 'BKN1',
            'judul' => 'Belajar DB',
            'pengarang' => 'Jinsai',
            'jenis_buku' => 'Buku Umum',
            'harga' => '103.000',
            'qty' => '50'
        ]);

    }
}
