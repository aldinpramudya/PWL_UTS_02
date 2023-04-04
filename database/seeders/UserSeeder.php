<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'Admin Perpustakkan',
            'email' => 'admin@gmail.com',
            'tanggal_lahir' => '23 April 2003',
            'password' => Hash::make('password')
        ]);
    }
}
