<?php

namespace App\Http\Controllers;

use App\Models\Sektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('backend.sektor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namaFoto = time().'-'.$request->gambarSektor->getClientOriginalName();
        $request->gambarSektor->move(public_path('backend/images/sektor/'),$namaFoto);


        $validate= $request->validate([
            'namaSektor'=>'required|unique:Sektors',
            // 'gambarSektor'=>'required',
            'deskripsiSektor'=>'required'
        ],[
            'unique'=>'Data Sektor Ini Sudah Ada'
        ]);
        $validate['gambarSektor']=$namaFoto;


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
        return view('backend.sektor.edit',[
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

        if($request->gambarSektor){

            $sektorLama = Sektor::find($id);
            File::delete('backend/images/sektor/'.$sektorLama->gambarSektor);

            $namaFoto = time().'-'.$request->gambarSektor->getClientOriginalName();
            $request->gambarSektor->move(public_path('backend/images/sektor/'),$namaFoto);

            $validate= $request->validate([
                'namaSektor'=>['required','unique:sektors,namaSektor,'.$id.'id'],
                // 'namaSektor'=>'unique:table,column,except,id'
                'deskripsiSektor'=>'required'
            ],
            [
                'unique'=>'Data Sektor Ini Sudah Ada'
            ]);
            $validate['gambarSektor']=$namaFoto;
        }
        else{
            $validate= $request->validate([
                'namaSektor'=>['required','unique:sektors,namaSektor,'.$id.'id'],
                'deskripsiSektor'=>'required'
            ],[
                'unique'=>'Data Sektor Ini Sudah Ada'
            ]);
        }

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
        $sektor = Sektor::find($id);
        File::delete('backend/images/sektor/'.$sektor->gambarSektor);
        Sektor::destroy($id);

        return back()->with('success','Data Sektor Berhasil Di Hapus');
    }
}
