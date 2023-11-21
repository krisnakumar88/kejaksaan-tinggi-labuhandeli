<?php

namespace App\Http\Controllers;

use App\Models\Pejabatstruktural;
use App\Models\File;
use Illuminate\Http\Request;

class PejabatstrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send['data'] = Pejabatstruktural::all();
        return view("admin.pejabatstruktural", $send);
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
            'nama'              => 'required|min:3|max:255',
            'jabatan'           => 'required|min:3|max:255',
            'tentang_pejabat'   => 'required|min:3'
        ]);
        
        $file = File::FirstOrCreate([
            'name' => $filenameSimpan,
            'type' => $type,
            'size' => $size
        ]);

        $validatedData['foto'] = $file->id;

        $request->file('foto')->move(public_path('file'), $filenameSimpan);

        Pejabatstruktural::create($validatedData);
        return redirect()->route('pejabatstruktural.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
