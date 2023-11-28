<?php

namespace App\Http\Controllers;

use App\Imports\AnggotaImport;
use App\Models\Anggota;
use App\Models\Divisi;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.anggota.index',[
        'data'=>Anggota::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.anggota.create',[
            'divisi'=>Divisi::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validate=$request->validate([
            'nama'=>'required',
            'email'=>'required',
            'idDivisi'=>'required',
            'alamat'=>'required',
            'noHp'=>'required',
            // 'namaPerusahaan'=>'required',
            'jKelamin'=>'required',
            'tempatLahir'=>'required',
            'tanggalLahir'=>'required',
            'motto'=>'required',
            'motto'=>'required',
            'twitter'=>'nullable',
            'facebook'=>'nullable',
            'instagram'=>'nullable',
            'linkedin'=>'nullable',
        ]);
        $namaFoto = time().'-'.$request->foto->getClientOriginalName();
        $request->foto->move(public_path('backend/images/foto-anggota'),$namaFoto);
        $validate['foto']=$namaFoto;

        Anggota::create($validate);

        return redirect('/dashboard/anggota')->with('Data Anggota Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.anggota.edit',[
            'data'=>Anggota::find($id),
            'divisi'=>Divisi::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validate=$request->validate([
            'nama'=>'required',
            'email'=>'required',
            'idDivisi'=>'required',
            'alamat'=>'required',
            'noHp'=>'required',
            // 'namaPerusahaan'=>'required',
            'jKelamin'=>'required',
            'tempatLahir'=>'required',
            'tanggalLahir'=>'required',
            'motto'=>'required',
            'twitter'=>'nullable',
            'facebook'=>'nullable',
            'instagram'=>'nullable',
            'linkedin'=>'nullable',
        ]);

        if($request->foto){
            $lama = Anggota::find($id);
            File::delete('backend/images/foto-anggota/'.$lama->foto);
            $namaFoto = time().'-'.$request->foto->getClientOriginalName();
            $request->foto->move(public_path('backend/images/foto-anggota'),$namaFoto);
            $validate['foto']=$namaFoto;
        }

        Anggota::find($id)->update($validate);

        return redirect('/dashboard/anggota')->with('Data Anggota Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lama = Anggota::find($id);
        File::delete('backend/images/foto-anggota/'.$lama->foto);

        Anggota::destroy($id);

        return back()->with('success','Data Berhasil Dihapus');
    }


    public function import(Request $r){


        $file = $r->file('data');
        $nameFile = $file->getClientOriginalName();

        $path = $file->storeAs('public/data-excel/',$nameFile);

        Excel::import(new AnggotaImport, storage_path('app/public/data-excel/'.$nameFile));

        Storage::delete($path);

        return redirect('/dashboard/anggota')->with('success','Data Berhasil di Import');
    }
}
