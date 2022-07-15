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
            'password' => bcrypt('admin123')
        ]);

        Biodata::create([
            'nim' => '60200120006',
            'nama' => 'Israbiatul Husni',
            'ttl' => 'Lambelu, 26 September 2001',
            'jk' => 'Perempuan',
            'alamat' => 'Desa Lele, Kec. Bahodopi, Kab. Morowali, provinsi Sulawesi tengah',
            'agama' => 'Islam',
            'status' => 'Mahasiswi',
            'kewarganegaraan' => 'Indonesia',
            'pendidikan_terakhir' => 'Madrasah Aliyah',
        ]);

        Biodata::create([
            'nim' => '60200120060',
            'nama' => 'Muh. Taslim Sultan',
            'ttl' => 'Makassar, 14 Maret 2002',
            'jk' => 'Laki-laki',
            'alamat' => 'Jl. Perintis Kemerdekaan KM.10',
            'agama' => 'Islam',
            'status' => 'Mahasiswa',
            'kewarganegaraan' => 'Indonesia',
            'pendidikan_terakhir' => 'Madrasah Aliyah',
        ]);

        Biodata::create([
            'nim' => '60200120123',
            'nama' => 'A.Zulvan Donangsyah',
            'ttl' => 'Bulukumba, 30 April 2002',
            'jk' => 'Laki-laki',
            'alamat' => 'Desa Lembanna, Kec. Kajang, Kab. Bulukumba',
            'agama' => 'Islam',
            'status' => 'Mahasiswa',
            'kewarganegaraan' => 'Indonesia',
            'pendidikan_terakhir' => 'SMA 18 Bulukumba',
        ]);

        // Biodata::create([
        //     'nim' => '60200120061',
        //     'nama' => 'Musfirah Nurul Fuadi',
        //     'ttl' => '-',
        //     'jk' => 'Perempuan',
        //     'alamat' => '-',
        //     'agama' => 'Islam',
        //     'status' => 'Mahasiswi',
        //     'kewarganegaraan' => 'Indonesia',
        //     'pendidikan_terakhir' => '-',
        // ]);

        // Biodata::create([
        //     'nim' => '60200120140',
        //     'nama' => 'Risna',
        //     'ttl' => '-',
        //     'jk' => 'Perempuan',
        //     'alamat' => '-',
        //     'agama' => 'Islam',
        //     'status' => 'Mahasiswi',
        //     'kewarganegaraan' => 'Indonesia',
        //     'pendidikan_terakhir' => '-',
        // ]);
    }
}
