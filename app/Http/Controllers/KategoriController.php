<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.kategori.index',[
            'data'=>Kategori::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate= $request->validate([
            'namaKategori'=>'required|unique:kategoris'
        ],[
            'unique'=>'Data Kategori Ini Sudah Ada'
        ]);

        Kategori::create($validate);

        return redirect('/dashboard/kategori')->with('success',"Data Kategori Berhasil Ditambahkan");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.kategori.edit',[
            'data'=>Kategori::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate= $request->validate([
            'namaKategori'=>'required|unique:kategoris'
        ],[
            'unique'=>'Data Kategori Ini Sudah Ada'
        ]);

        Kategori::find($id)->update($validate);

        return redirect('/dashboard/kategori')->with('success',"Data Kategori Berhasil Di Edit");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::destroy($id);

        return back()->with('success',"Data Kategori Berhasil Di Hapus");
    }
}
