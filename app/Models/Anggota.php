<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'idJabatan');
    }
    public function divisi(){
        return $this->belongsTo(Divisi::class,'idDivisi');
    }
}
