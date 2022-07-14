<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Biodata::create([
            'nim' => '60200120006',
            'nama' => 'Israbiatul Husni',
            'ttl' => 'lambelu, 26 september 2001',
            'jk' => 'perempuan',
            'alamat' => 'kab. morowali',
            'agama' => 'Islam',
            'status' => 'mahasiswi',
            'kewarganegaraan' => 'Indonesia',
            'pendidikan_terakhir' => 'MA',
        ]);
    }
}
