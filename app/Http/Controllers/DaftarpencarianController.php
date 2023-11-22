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
        $dataFile = $request->validate([
            'foto' => 'required|file|mimes:jpg,jpeg,png'
        ]);

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

        $validatedData = $request->validate([
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

        $dpo = Daftarpencarian::create($validatedData);

        // $path = $request->file('foto')->storeAs('images', $filenameSimpan);

        $request->file('foto')->move(public_path('file'), $filenameSimpan);

        // DB::commit();

        return redirect()->route('daftarpencarian.index')->with('success', 'Data Berhasil Ditambahkan');

        // if ($request->hasFile('foto')) {
        //     $filenameWithExt = $request->file('foto')->getClientOriginalName();
        //     $type = $request->file('foto')->getClientMimeType();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('foto')->getClientOriginalExtension();
        //     $filenameSimpan = time() . '.' . $extension;
        //     $size = $request->file('foto')->getSize();
        // } else {
        //     return redirect()->back()->with('failed', 'Gambar Belum Masuk');
        // }

        // $validatedData = $this->validate($request, [
        //     'nama'       => 'required|min:3|max:255',
        //     'kasus'      => 'required|min:3|max:255',
        //     'keterangan' => 'required|min:3'
        // ]);

        // $file = File::FirstOrCreate([
        //     'name' => $filenameSimpan,
        //     'type' => $type,
        //     'size' => $size
        // ]);

        // $validatedData['foto'] = $file->id;

        // $request->file('foto')->move(public_path('file'), $filenameSimpan);

        // Daftarpencarian::create($validatedData);
        // return redirect()->route('daftarpencarian.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarpencarian  $daftarpencarian
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarpencarian $daftarpencarian)
    {
        $daftarpencarian = Daftarpencarian::where('id', $daftarpencarian->id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data DPO',
            'data'    => $daftarpencarian
        ]);
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
        $daftarpencarian = Daftarpencarian::where('id', $daftarpencarian->id)->first();

        $this->validate($request, [
            'foto'      => 'file|mimes:jpg,jpeg,bmp,png',
            'nama'      => 'required|min:3|max:255',
            'kasus'     => 'required|min:3|max:255',
            'keterangan' => 'required|min:3'
        ]);

        if ($request->hasFile('foto')) {

            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $type = $request->file('foto')->getClientMimeType();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filenameSimpan = time() . '.' . $extension;
            $size = $request->file('foto')->getSize();

            $foto = File::where('id', $daftarpencarian->foto)->first();

            unlink(public_path('file/' . $foto->name));

            $request->file('foto')->move(public_path('file'), $filenameSimpan);

            $file = File::FirstOrCreate([
                'name' => $filenameSimpan,
                'type' => $type,
                'size' => $size
            ]);

            $daftarpencarian->update([
                'foto'              => $file->id,
                'nama'              => $request->nama,
                'kasus'             => $request->kasus,
                'keterangan'        => $request->keterangan
            ]);

        } else {
            $daftarpencarian->update([
                'nama'              => $request->nama,
                'kasus'             => $request->kasus,
                'keterangan'        => $request->keterangan
            ]);
        };        

        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarpencarian  $daftarpencarian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarpencarian $daftarpencarian)
    {
        $daftarpencarian = Daftarpencarian::where('id', $daftarpencarian->id)->first();

        $foto = File::where('id', $daftarpencarian->foto)->first();
        File::where('id', $daftarpencarian->foto)->delete();
        unlink(public_path('file/' . $foto->name));

        Daftarpencarian::destroy($daftarpencarian->id);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');

    }
}
