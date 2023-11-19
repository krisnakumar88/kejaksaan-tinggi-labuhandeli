<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send['data'] = Berita::all();
        return view("admin.berita", $send);
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
            'foto' => 'required|file|mimes:jpg,jpeg,bmp,png'
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

        // $type = $request->foto->getClientMimeType();
        // $size = $request->foto->getSize();

        // $fileName = time() . '-' . $request->foto->getClientOriginalName();

        $validatedData = $this->validate($request, [
            'judul' => 'required|min:3|max:255',
            'content' => 'required|min:3'
        ]);

        $validatedData['slug'] = Str::slug($validatedData['judul'], '-');

        // Berita::create($validatedData);

        // $dataBerita = [
        //     'judul' => $request->input('judul'),
        //     'content' => $request->input('konten'),
        //     'slug' => Str::slug($request->input('judul')),
        //     'user_id' => Auth::user()->id,
        // ];



        // $dataUser['password'] = Hash::make($dataUser['password']);

        // $dataUser['role'] = "anggota";

        // DB::beginTransaction();

        // try {

        // $user = User::FirstOrCreate($dataUser);

        // $dataBerita['id_user'] = $user->id;

        $file = File::FirstOrCreate([
            'name' => $filenameSimpan,
            'type' => $type,
            'size' => $size
        ]);

        $validatedData['foto'] = $file->id;
        $validatedData['user_id'] = Auth::user()->id;

        $berita = berita::create($validatedData);

        // $path = $request->file('foto')->storeAs('images', $filenameSimpan);

        $request->file('foto')->move(public_path('file'), $filenameSimpan);

        // DB::commit();

        return redirect()->route('berita.index')->with('success', 'Data Berhasil Ditambahkan');
        // } catch (\Throwable $th) {
        //     DB::rollback();
        //     return redirect()->route('berita.index')->with('failed', 'Data Gagal Ditambahkan, ' . $th->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($berita)
    {
        $berita = Berita::where('id', $berita)->first();

        Berita::destroy($berita);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
