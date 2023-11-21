<?php

namespace App\Http\Controllers;

use App\Models\Daftarpencarian;
use App\Models\File;
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
        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $type = $request->file('foto')->getClientMimeType();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filenameSimpan = time() . '.' . $extension;
            $size = $request->file('foto')->getSize();
        } else {
            return redirect()->back()->with('failed', 'Gambar Belum Masuk');
        }

        $validatedData = $this->validate($request, [
            'nama'       => 'required|min:3|max:255',
            'kasus'      => 'required|min:3|max:255',
            'keterangan' => 'required|min:3'
        ]);
        
        $file = File::FirstOrCreate([
            'name' => $filenameSimpan,
            'type' => $type,
            'size' => $size
        ]);

        $validatedData['foto'] = $file->id;

        $request->file('foto')->move(public_path('file'), $filenameSimpan);

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
        Daftarpencarian::destroy($daftarpencarian->id);
        return redirect()->route('daftarpencarian.index')->with('success', 'Data Berhasil Dihapus');
    }
}
