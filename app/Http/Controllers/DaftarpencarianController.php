<?php

namespace App\Http\Controllers;

use App\Models\Daftarpencarian;
use Illuminate\Http\Request;

class DaftarpencarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send['data'] = Daftarpencarian::all();
        return view("admin.daftarpencarian", $send);
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
            'nama'       => 'required|min:3|max:255',
            'kasus'      => 'required|min:3|max:255',
            'keterangan' => 'required|min:3'
        ]);
        $validatedData['foto'] = "";
        
        $daftarpencarian = Daftarpencarian::create($validatedData);

        return redirect()->route('daftarpencarian.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarpencarian  $daftarpencarian
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarpencarian $daftarpencarian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftarpencarian  $daftarpencarian
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarpencarian $daftarpencarian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftarpencarian  $daftarpencarian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarpencarian $daftarpencarian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarpencarian  $daftarpencarian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarpencarian $daftarpencarian)
    {
        //
    }
}
