<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Kepengurusan;
use App\Models\Surat;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function berita(Request $request){

        if($request->cari){
            $berita = Berita::where('judulBerita','like','%'.$request->cari.'%')
            ->orWhere('deskripsi','like','%'.$request->cari.'%')
            ->paginate(3);
        }
        else {
            $berita = Berita::paginate(2);
        }

        return view('frontend.berita',[
            'berita'=>$berita
        ]);
    }
    public function beritaKategori($kategori,Request $request){
        $id_kategori = Kategori::where('namaKategori',$kategori)->first();

        if($request->cari != null){
            $berita = Berita::where('idKategori',$id_kategori->id)->Where('judulBerita','like','%'.$request->cari.'%')
            ->orWhere('deskripsi','like','%'.$request->cari.'%')
            ->paginate(5);
            // dd($berita);
        }
        else {
            // $berita = Berita::paginate(2);
            $berita = Berita::where('idKategori',$id_kategori->id)->paginate(5);
        }
        return view('frontend.berita',[
            'berita'=>$berita
        ]);
    }
    public function singleBlog($slug){
       $berita = Berita::where('slug',$slug)->first();

        return view('frontend.blog',[
            'data'=>$berita
        ]);
    }
    public function kepengurusan($tahun){
        // $tahun =2020;
        $kepengurusan = Kepengurusan::where('tahunMulai',$tahun)->first();

        return view('frontend.kepengurusan',[
            'data'=>$kepengurusan
        ]);
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contactStore(Request $request){
        $validate = $request->validate([
            'namaPengirim'=>'required',
            'email'=>'required',
            'noHp'=>'required',
            'subject'=>'required',
            'deskripsi'=>'required',
        ]);

        Surat::create($validate);
        return back()->with('success','Pesan Berhasil Dikirim');
    }


}
