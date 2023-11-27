<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.kegiatan.index',[
            'data'=>Kegiatan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kegiatan.create');
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
            'namaKegiatan'=>'required',
            'jamMulai'=>'required',
            'tanggalKegiatan'=>'required',
            'lokasi'=>'required',
            'deskripsiKegiatan'=>'required',
        ]);
        if($request->jamAkhir){
            $validate['jamAKhir']=$request->jamAkhir;
        }else{
            $validate['jamAKhir']='selesai';
        }

        Kegiatan::create($validate);
        return redirect('/dashboard/kegiatan')->with('success','Data Kegiatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.kegiatan.edit',[
            'data'=>Kegiatan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'namaKegiatan'=>'required',
            'jamMulai'=>'required',
            'tanggalKegiatan'=>'required',
            'lokasi'=>'required',
            'deskripsiKegiatan'=>'required',
        ]);
        if($request->jamAkhir){
            $validate['jamAKhir']=$request->jamAkhir;
        }else{
            $validate['jamAKhir']='selesai';
        }

        Kegiatan::find($id)->update($validate);
        return redirect('/dashboard/kegiatan')->with('success','Data Kegiatan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kegiatan::destroy($id);

        return back()->with('success','Data Kegiatan Berhasil Dihapus');
    }
}
