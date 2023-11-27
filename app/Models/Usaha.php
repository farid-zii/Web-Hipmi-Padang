<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function anggota(){
        return $this->belongsTo(Anggota::class,'id_anggota');
    }
    public function sektor(){
        return $this->belongsTo(Sektor::class,'id_sektor');
    }
}
