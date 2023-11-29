<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send['data'] = KategoriBerita::all();
        return view('admin.kategori_berita', $send);
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
        $validatedData = $this->validate($request, [
            'nama' => 'required'
        ]);

        $kategori_halaman = KategoriBerita::create($validatedData);

        return redirect()->route('kategori-berita.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function show($kategoriBerita)
    {
        $kategoriBerita = KategoriBerita::where('id', $kategoriBerita)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Halaman',
            'data'    => $kategoriBerita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kategori)
    {
        $kategori = KategoriBerita::where('id', $kategori)->first();

        $this->validate($request, [
            'nama' => 'required'
        ]);

        $kategori->update([
            'nama' => $request->nama
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function destroy($kategoriBerita)
    {
        $kategori = KategoriBerita::where('id', $kategoriBerita)->first();

        $kategori->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
