<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;
use App\Models\User;

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

        User::create([
            'username' => 'admin',
            'password' => 'taslim123'
        ]);

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
