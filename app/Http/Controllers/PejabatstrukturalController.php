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
        // $dataFile = $request->validate([
        //     'foto' => 'required|file|mimes:jpg,jpeg,bmp,png'
        // ]);

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
            'nama' => 'required|min:3|max:255',
            'title' => 'required|min:3|max:255',
            'tentang' => 'required|min:3'
        ]);

        // $file = File::FirstOrCreate([
        //     'name' => $filenameSimpan,
        //     'type' => $type,
        //     'size' => $size
        // ]);

        // $validatedData['foto'] = $file->id;
        $validatedData['foto'] = "";
        // $validatedData['user_id'] = Auth::user()->id;

        $pejabatstruktural = Pejabatstruktural::create($validatedData);

        // $request->file('foto')->move(public_path('file'), $filenameSimpan);

        return redirect()->route('pejabatstruktural.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pejabatstruktural  $pejabatstruktural
     * @return \Illuminate\Http\Response
     */
    public function show(Pejabatstruktural $pejabatstruktural)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pejabatstruktural  $pejabatstruktural
     * @return \Illuminate\Http\Response
     */
    public function edit(Pejabatstruktural $pejabatstruktural)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pejabatstruktural  $pejabatstruktural
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pejabatstruktural $pejabatstruktural)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pejabatstruktural  $pejabatstruktural
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pejabatstruktural $pejabatstruktural)
    {
        $pejabatstruktural = Pejabatstruktural::where('id', $pejabatstruktural)->first();
        Pejabatstruktural::destroy($pejabatstruktural);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
