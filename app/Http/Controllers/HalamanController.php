<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send['data'] = Halaman::all();
        return view('admin.halaman', $send);
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

        $kategori_halaman = Halaman::create($validatedData);

        return redirect()->route('halaman.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function show($halaman)
    {
        $halaman = halaman::where('id', $halaman)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Halaman',
            'data'    => $halaman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Halaman $halaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $halaman)
    {
        $halaman = halaman::where('id', $halaman)->first();

        $this->validate($request, [
            'nama' => 'required'
        ]);

        $halaman->update([
            'nama' => $request->nama
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($halaman)
    {
        $halaman = halaman::where('id', $halaman)->first();

        $halaman->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
