<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.divisi.index',[
            'data'=>Divisi::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.divisi.create');
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
            'namaDivisi'=>'required|unique:Divisis'
        ],[
            'unique'=>'Data Divisi Ini Sudah Ada'
        ]);

        Divisi::create($validate);

        return redirect('/dashboard/divisi')->with('success',"Data Divisi Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.divisi.edit',[
            'data'=>Divisi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate= $request->validate([
            'namaDivisi'=>'required|unique:Divisis'
        ],[
            'unique'=>'Data Divisi Ini Sudah Ada'
        ]);

        Divisi::find($id)->update($validate);

        return redirect('/dashboard/divisi')->with('success',"Data Divisi Berhasil Di edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
     Divisi::destroy($id);

     return back()->with('success',"Data Divisi Berhasil Dihapus");
    }
}
