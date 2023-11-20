<?php

namespace App\Http\Livewire\Jabatan;

use App\Models\Jabatan;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Table extends Component
{
    public $namaJabatan;
    public $judul="Jabatan";

    public $listeners = [
        'delete'=>'delete',
        'store'=>'store',
    ];


    public function render()
    {
        return view('livewire.jabatan.table',[
            'jabatan'=>Jabatan::get()
        ]);
    }

    public function store(){
        Jabatan::create([
            'namaJabatan'=>$this->namaJabatan
        ]);
    }

    public function delete($id){
        Jabatan::destroy($id);
    }
}
