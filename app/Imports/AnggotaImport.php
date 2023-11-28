<?php

namespace App\Imports;

use App\Models\Anggota;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnggotaImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Anggota([
            'nama'=>$row['nama'],
            'tempatLahir'=>$row['tempat_lahir'],
            'tanggalLahir'=>Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir'])),
            'jKelamin'=>$row['jenis_kelamin'],
            'email'=>$row['email'],
            'noHp'=>$row['no_hp'],
            'alamat'=>$row['alamat'],
            'motto'=>'-',
            'foto'=>'foto.jpg',
        ]);
    }
}
