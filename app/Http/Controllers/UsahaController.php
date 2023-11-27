<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Sektor;
use App\Models\Usaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.usaha.index',[
            'data'=>Usaha::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.usaha.create',[
            'sektor'=>Sektor::get(),
            'anggota'=>Anggota::get(),
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

        $validate = $request->validate([
            'id_anggota'=>'required',
            'id_sektor'=>'required',
            'namaUsaha'=>'required',
            'lokasi'=>'required',
            'deskripsiUsaha'=>'required',
        ]);

        if($request->logo){
            $namaLogo = time().'-'.$request->logo->getClientOriginalName();
            $request->logo->move(public_path('backend/images/logo-umkm'),$namaLogo);
            $validate['logo']= $namaLogo;
        }
        if($request->gambarUsaha){
            $gambarUsaha = time().'-'.$request->logo->getClientOriginalName();
            $request->gambarUsaha->move(public_path('backend/images/foto-umkm'),$gambarUsaha);
            $validate['gambar_usaha']= $gambarUsaha;
        }

        Usaha::create($validate);

        return redirect('/dashboard/usaha')->with('success','Data UMKM baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.usaha.edit',[
            'data'=>Usaha::find($id),
            'sektor'=>Sektor::get(),
            'anggota'=>Anggota::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usaha = Usaha::find($id);
        $validate = $request->validate([
            'id_anggota'=>'required',
            'id_sektor'=>'required',
            'namaUsaha'=>'required',
            'lokasi'=>'required',
            'deskripsiUsaha'=>'required',
        ]);

        if($request->logo){
            if($usaha->logo){
            file::delete('backend/images/logo-umkm/'.$usaha->logo);
        }
            $namaLogo = time().'-'.$request->logo->getOrigiinalClientName();
            $request->logo->move(public_path('backend/images/logo-umkm'),$namaLogo);
            $validate['logo']= $namaLogo;
        }
        if($request->gambarUsaha){
            if($usaha->gambar_usaha){
            File::delete('backend/images/foto-umkm/'.$usaha->logo);
        }
            $gambarUsaha = time().'-'.$request->logo->getOrigiinalClientName();
            $request->gambarUsaha->move(public_path('backend/images/foto-umkm'),$gambarUsaha);
            $validate['gambar_usaha']= $gambarUsaha;
        }

        Usaha::find($id)->update($validate);

        return redirect('/dashboard/usaha')->with('success','Data UMKM Berhasi Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usaha = Usaha::find($id);
        if($usaha->logo){
            file::delete('backend/images/logo-umkm/'.$usaha->logo);
        }
        if($usaha->foto){
            File::delete('backend/images/foto-umkm/'.$usaha->logo);
        }
        Usaha::destroy($id);
        return back()->with('success','Data UMKM Berhasil Dihapus');
    }
}

