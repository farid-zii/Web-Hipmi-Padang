<?php

namespace App\Http\Livewire\Anggota;

use App\Models\Anggota;
use App\Models\Divisi;
use Livewire\Component;
use Livewire\WithPagination;

class Tampil extends Component
{
    public $cari;
    public $idDivisi;

    use  WithPagination;
    protected $paginationTheme="bootstrap";

    public function render()
    {
        if($this->idDivisi){
            if($this->cari){
                $data = Anggota::where('nama','like','%'.$this->cari.'%')->where('idDivisi',$this->idDivisi)->paginate(20);
            }else{
                $data = Anggota::where('idDivisi',$this->idDivisi)->paginate(20);
            }
            return view('livewire.anggota.tampil',[
            'data'=>$data,
            'divisi'=>Divisi::get()
        ]);
        }
        if($this->cari){
            $data = Anggota::where('nama','like','%'.$this->cari.'%')->paginate(20);
        }else{
            $data = Anggota::paginate(20);
        }

        return view('livewire.anggota.tampil',[
            'data'=>$data,
            'divisi'=>Divisi::get()
        ]);
    }
}
