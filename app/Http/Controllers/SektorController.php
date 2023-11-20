<?php

namespace App\Http\Controllers;

use App\Models\Sektor;
use Illuminate\Http\Request;

class SektorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.sektor.index',[
            'data'=>Sektor::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'namaSektor'=>'required|unique:Sektors'
        ],[
            'unique'=>'Data Sektor Ini Sudah Ada'
        ]);

        Sektor::create($validate);

        return redirect('/dashboard/sektor')->with('success',"Data Sektor Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function show(Sektor $sektor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.sektor.index',[
            'data'=>Sektor::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate= $request->validate([
            'namaSektor'=>'required|unique:Sektors'
        ],[
            'unique'=>'Data Sektor Ini Sudah Ada'
        ]);

        Sektor::find($id)->update($validate);

        return redirect('/dashboard/sektor')->with('success',"Data Sektor Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sektor::destroy($id);

        return back()->with('success','Data Sektor Berhasil Di Hapus');
    }
}
