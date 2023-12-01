<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anggota;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Sektor;
use App\Models\User;
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
        Divisi::create([
            'namaDivisi'=>"Organisasi, Keanggotaan dan Kelembagaan"
        ]);
        Divisi::create([
            'namaDivisi'=>"Keuangan dan Perbankan"
        ]);
        Divisi::create([
            'namaDivisi'=>"Perdagangan Perindustrian dan ESDM"
        ]);
        Divisi::create([
            'namaDivisi'=>"Perhubungan dan BUMN"
        ]);
        Divisi::create([
            'namaDivisi'=>"Kemaritiman, Pertanian, Kehutanan, dan Lingkungan Hidup"
        ]);
        Divisi::create([
            'namaDivisi'=>"Pariwisata, Ekonomi Kreatif, Koperasi dan UMKM"
        ]);
        Divisi::create([
            'namaDivisi'=>"Investasi, Infokom, dan Kerjsama Internasional"
        ]);
        Divisi::create([
            'namaDivisi'=>"Tata Ruang, PU dan Pembangunan Desa"
        ]);
        Divisi::create([
            'namaDivisi'=>"Ketenagakerjaan, Vokasi dan Kesehatan"
        ]);
        Divisi::create([
            'namaDivisi'=>"Pendidikan Riset, Sosial, Pemuda dan Olahraga"
        ]);
        // \App\Models\User::factory()->create();
        Anggota::factory(30)->create();

        // User::create([
        //     'username' => 'fanda',
        //     'password' => bcrypt('123456'),
        //     'level' => 'admin',
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Sektor
        //  Sektor::factory()->create([
        //     'namaSektor'=>'Jasa'
        //  ]);

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
