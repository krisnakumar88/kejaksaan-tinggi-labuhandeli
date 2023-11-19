<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view("front.index");
    }

    public function berita(){
        $berita = Berita::paginate(10);
        return view('front.berita', compact('berita'));
    }

    public function berita_detail(Berita $berita){

        return view('front.berita_detail', compact('berita'));
    }
}
