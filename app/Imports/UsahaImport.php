<?php

namespace App\Imports;

use App\Models\Usaha;
use Maatwebsite\Excel\Concerns\ToModel;

class UsahaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usaha([
            //
        ]);
    }
}
