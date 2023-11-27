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

    // hasmany
    public function kepengurusan(){
        return $this->hasMany(Kepengurusan::class);
    }
    public function usaha(){
        return $this->hasMany(Usaha::class);
    }
}
