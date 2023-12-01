<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Kepengurusan;
use App\Models\Surat;
use App\Models\Usaha;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index',[
            'berita'=>Berita::get(),
            'anggota'=>Anggota::get(),
            'usaha'=>Usaha::get(),
            'kegiatan'=>Kegiatan::get(),
        ]
    );
    }
    public function about(){
        return view('frontend.tentangKami',[
            'berita'=>Berita::get(),
            'anggota'=>Anggota::get(),
            'usaha'=>Usaha::get(),
            'kegiatan'=>Kegiatan::get(),
        ]);
    }

    public function berita(Request $request){

        if($request->cari){
            $berita = Berita::where('judulBerita','like','%'.$request->cari.'%')
            ->orWhere('deskripsi','like','%'.$request->cari.'%')
            ->paginate(3);
        }
        else {
            $berita = Berita::paginate(8);
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

    public function anggota(){
        return view('frontend.anggota');
    }
    public function kegiatan(){


        return view('frontend.kegiatan',[
            "data"=>Kegiatan::get()
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

    public function umkm(){
        return view('frontend.umkm');
    }
    public function umkmDetail($nama){

        return view('frontend.usaha-detail',[
            'data'=>Usaha::where('namaUSaha',$nama)->first()
        ]);
    }

}
