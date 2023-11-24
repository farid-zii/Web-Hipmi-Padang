<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.kepengurusan.index',[
            'data'=>Kepengurusan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kepengurusan.create',[
            'anggota'=>Anggota::get()
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
            'tahunMulai'=>'required',
            'tahunAkhir'=>'required',
            'ketua'=>'required',
            'waket_1'=>'required',
            'waket_2'=>'required',
            'waket_3'=>'required',
            'sekretaris'=>'required',
            'wasek_1'=>'required',
            'wasek_2'=>'required',
            'wasek_3'=>'required',
            'wasek_4'=>'required',
            'wasek_5'=>'required',
            'wasek_6'=>'required',
            'bendahara'=>'required',
            'waben_1'=>'required',
            'waben_2'=>'required',
            'waben_3'=>'required',
            'waben_4'=>'required',
            'kabid_1'=>'required',
            'kabid_2'=>'required',
            'kabid_3'=>'required',
            'kabid_4'=>'required',
            'kabid_5'=>'required',
            'kabid_6'=>'required',
            'kabid_7'=>'required',
            'kabid_8'=>'required',
            'kabid_9'=>'required',
            'kabid_10'=>'required',
        ]);

        Kepengurusan::create($validate);

        return redirect('/dashboard/kepengurusan')->with('success','Data Kepengurusan Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kepengurusan  $kepengurusan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("backend.kepengurusan.show",[
            'data'=>Kepengurusan::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kepengurusan  $kepengurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    return view("backend.kepengurusan.edit",[
            'data'=>Kepengurusan::find($id),
            'anggota' => Anggota::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kepengurusan  $kepengurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'tahunMulai'=>'required',
            'tahunAkhir'=>'required',
            'ketua'=>'required',
            'waket_1'=>'required',
            'waket_2'=>'required',
            'waket_3'=>'required',
            'sekretaris'=>'required',
            'wasek_1'=>'required',
            'wasek_2'=>'required',
            'wasek_3'=>'required',
            'wasek_4'=>'required',
            'wasek_5'=>'required',
            'wasek_6'=>'required',
            'bendahara'=>'required',
            'waben_1'=>'required',
            'waben_2'=>'required',
            'waben_3'=>'required',
            'waben_4'=>'required',
            'kabid_1'=>'required',
            'kabid_2'=>'required',
            'kabid_3'=>'required',
            'kabid_4'=>'required',
            'kabid_5'=>'required',
            'kabid_6'=>'required',
            'kabid_7'=>'required',
            'kabid_8'=>'required',
            'kabid_9'=>'required',
            'kabid_10'=>'required',
        ]);

        Kepengurusan::find($id)->update($validate);

        return redirect('/dashboard/kepengurusan')->with('success','Data Kepengurusan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kepengurusan  $kepengurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kepengurusan::destroy($id);

        return back()->with('success','Data Kepengurusan Berhasil Dihapus');
    }
}
