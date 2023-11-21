<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pejabatstruktural;
use App\Models\Daftarpencarian;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $send['getPejabat']         = Pejabatstruktural::all();
        $send['getDaftarpencarian'] = Daftarpencarian::all();
        
        return view("front.index", $send);
    }

    public function berita(){
        $berita = Berita::paginate(10);
        return view('front.berita', compact('berita'));
    }

    public function berita_detail(Berita $berita){

        return view('front.berita_detail', compact('berita'));
    }
}
