<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Rekam;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Rekam::factory(10)->create();

        Pasien::create([
            'nama' => 'Dias',
            'umur' => '21',
            'alamat' => 'Kediri'
        ]);

        Pasien::create([
            'nama' => 'Dyandra',
            'umur' => '20',
            'alamat' => 'Surabaya'
        ]);

        Dokter::create([
            'nama' => 'Doni',
            'umur' => '50',
            'alamat' => 'Jakarta'
        ]);

        Dokter::create([
            'nama' => 'Andi',
            'umur' => '35',
            'alamat' => 'Malang'
        ]);

        Dokter::create([
            'nama' => 'Bayu',
            'umur' => '40',
            'alamat' => 'Solo'
        ]);
        
    }
}
