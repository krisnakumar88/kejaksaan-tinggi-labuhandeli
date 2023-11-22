<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pejabatstruktural;
use App\Models\Daftarpencarian;
use App\Models\Sambutanketua;
use App\Models\Hubungi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $send['getPejabat']         = Pejabatstruktural::all();
        $send['getDaftarpencarian'] = Daftarpencarian::all();
        $send['getKatasambutan']    = Sambutanketua::orderBy('id', 'desc')->first();
        
        return view("front.index", $send);
    }

    public function berita(){
        $berita = Berita::paginate(10);
        return view('front.berita', compact('berita'));
    }

    public function berita_detail(Berita $berita){

        return view('front.berita_detail', compact('berita'));
    }

    public function dpo(){
        $send['getDpo'] = Daftarpencarian::all();
        return view('front.dpo', $send);
    }

    public function hubungi(){
        return view('front.hubungi');
    }

    public function pesan(Request $request){
        $validatedData = $this->validate($request, [
            'nama'       => 'required|min:3|max:255',
            'email'       => 'required|min:3|max:255',
            'nomortelp'      => 'required|min:3|max:255',
            'pesan' => 'required|min:3'
        ]);


        Hubungi::create($validatedData);
        return redirect()->route('hubungi')->with('success', 'Pesan Berhasil Dikirim');
    }

    public function sambutan(Sambutanketua $sambutanketua){
        $sambutanketua = Sambutanketua::orderBy('id', 'desc')->first();
        return view('front.sambutanketua', [
            'sambutanketua' => $sambutanketua
        ]);
    }
}
