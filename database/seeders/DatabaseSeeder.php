<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jabatan;
use App\Models\Sektor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Sektor

        // #region
        // Sektor::factory()->create([
        //     'namaSektor'=>'Jasa'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Hotel & Parawisata'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Kontruksi'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Pabrik & Pertanian'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Retail & Perdagangan'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Properti'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Transportasi'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Financial'
        // ]);
        // Sektor::factory()->create([
        //     'namaSektor'=>'Keseuhatan & Kecantikan'
        // ]);

        // #endregion

        #region
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Ketua Umum'
            ],
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Wakil Ketua Umum'
            ],
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Sekretaris Umum'
            ],
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Wakil Sekretaris Umum'
            ],
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Bendahara Umum'
            ],
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Wakil Bendahara Umum'
            ],
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Ketua Bidang'
            ]
        );
        Jabatan::factory()->create(
            [
                'namaJabatan'=>'Anggota'
            ],
        );
    #endregion

    }


}
