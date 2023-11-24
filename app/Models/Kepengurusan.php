<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepengurusan extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function ketum(){
        return $this->belongsTo(Anggota::class,'ketua');
    }
    public function waketum_1(){
        return $this->belongsTo(Anggota::class,'waket_1');
    }
    public function waketum_2(){
        return $this->belongsTo(Anggota::class,'waket_2');
    }
    public function waketum_3(){
        return $this->belongsTo(Anggota::class,'waket_3');
    }
    public function sekre(){
        return $this->belongsTo(Anggota::class,'sekretaris');
    }
    public function wasekre_1(){
        return $this->belongsTo(Anggota::class,'wasek_1');
    }
    public function wasekre_2(){
        return $this->belongsTo(Anggota::class,'wasek_2');
    }
    public function wasekre_3(){
        return $this->belongsTo(Anggota::class,'wasek_3');
    }
    public function wasekre_4(){
        return $this->belongsTo(Anggota::class,'wasek_4');
    }
    public function wasekre_5(){
        return $this->belongsTo(Anggota::class,'wasek_5');
    }
    public function wasekre_6(){
        return $this->belongsTo(Anggota::class,'wasek_6');
    }
    public function bendaharas(){
        return $this->belongsTo(Anggota::class,'bendahara');
    }
    public function wabend_1(){
        return $this->belongsTo(Anggota::class,'waben_1');
    }
    public function wabend_2(){
        return $this->belongsTo(Anggota::class,'waben_2');
    }
    public function wabend_3(){
        return $this->belongsTo(Anggota::class,'waben_3');
    }
    public function wabend_4(){
        return $this->belongsTo(Anggota::class,'waben_4');
    }
    public function kbid_1(){
        return $this->belongsTo(Anggota::class,'kabid_1');
    }
    public function kbid_2(){
        return $this->belongsTo(Anggota::class,'kabid_2');
    }
    public function kbid_3(){
        return $this->belongsTo(Anggota::class,'kabid_3');
    }
    public function kbid_4(){
        return $this->belongsTo(Anggota::class,'kabid_4');
    }
    public function kbid_5(){
        return $this->belongsTo(Anggota::class,'kabid_5');
    }
    public function kbid_6(){
        return $this->belongsTo(Anggota::class,'kabid_6');
    }
    public function kbid_7(){
        return $this->belongsTo(Anggota::class,'kabid_7');
    }
    public function kbid_8(){
        return $this->belongsTo(Anggota::class,'kabid_8');
    }
    public function kbid_9(){
        return $this->belongsTo(Anggota::class,'kabid_9');
    }
    public function kbid_10(){
        return $this->belongsTo(Anggota::class,'kabid_10');
    }
}
