<?php

namespace App\Http\Livewire\Umkm;

use App\Models\Sektor;
use App\Models\Usaha;
use Livewire\Component;
use Livewire\WithPagination;

class Tampil extends Component
{
    public $cari;
    public $sektorId=null;

    use  WithPagination;
    protected $paginationTheme="bootstrap";

    public function render()
    {

        if($this->sektorId){
            $idSektor =Sektor::find($this->sektorId);
            if($this->cari){
                $usaha = Usaha::where('id_sektor',$idSektor->id)->where('namaUsaha','like','%'.$this->cari.'%')->get();
            }else{
                $usaha = Usaha::where('id_sektor',$idSektor->id)->get();
            }

            return view('livewire.umkm.tampil',[
            'data'=>$usaha,
            'sektor'=>Sektor::get()
        ]);
        }
        if($this->cari){
            $usaha = Usaha::where('namaUsaha','like','%'.$this->cari.'%')->get();
        }else{
            $usaha = Usaha::get();
        }

        return view('livewire.umkm.tampil',[
            'data'=>$usaha,
            'sektor'=>Sektor::get()
        ]);
    }
}
