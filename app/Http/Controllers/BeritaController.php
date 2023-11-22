<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Str;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('backend.berita.index',[
        'data'=>Berita::get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.berita.create',[
            "kategori"=>Kategori::get()
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
        $namaGambar = time().'-'.$request->gambarBerita->getClientOriginalName();
        $request->gambarBerita->move(public_path('backend/images/berita'),$namaGambar);

        $validate = $request->validate([
            'idKategori'=>'required',
            'judulBerita'=>'required',
            // 'gambarBerita'=>'required',
            'tanggalBerita'=>'required',
            'quotes'=>'nullable',
            'deskripsi'=>'required',
        ]);

        $validate['gambarBerita']= $namaGambar;
        $validate['slug']= Str::slug($request->judulBerita);

        Berita::Create($validate);

        return redirect('/dashboard/berita')->with('success','Data Berita Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.berita.edit',[
            'data'=>Berita::find($id),
            'kategori'=>Kategori::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request->gambarBerita != null){
            $berita = Berita::find($id);
            File::delete('backend/images/berita/'.$berita->gambarBerita);

            $namaGambar = time().'-'.$request->gambarBerita->getClientOriginalName();
            $request->gambarBerita->move(public_path('backend/images/berita'),$namaGambar);

            $validate = $request->validate([
                'idKategori'=>'nullable',
                'judulBerita'=>'required',
                // 'gambarBerita'=>'required',
                'tanggalBerita'=>'required',
                'quotes'=>'required',
                'deskripsi'=>'required',
            ]);
            $validate['gambarBerita']= $namaGambar;
        }
        else
        {
            $validate = $request->validate([
                'idKategori'=>'nullable',
                'judulBerita'=>'required',
                // 'gambarBerita'=>'required',
                'tanggalBerita'=>'required',
                'quotes'=>'required',
                'deskripsi'=>'required',
            ]);
        }

        $validate['slug']= Str::slug($request->judulBerita);

        Berita::find($id)->update($validate);

        return redirect('/dashboard/berita')->with('success','Data Berita Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        File::delete('backend/images/berita/'.$berita->gambarBerita);

        Berita::destroy($id);
        return back()->with('success','Data Berhasil Dihapus');
    }
}
