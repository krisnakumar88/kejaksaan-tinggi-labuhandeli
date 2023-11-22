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

        $validatedData = $this->validate($request, [
            'judul' => 'required|min:3|max:255',
            'content' => 'required|min:3'
        ]);

        $validatedData['slug'] = Str::slug($validatedData['judul'], '-');

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

    public function upload_foto(Request $request){
        if($request->hasFile('upload')) {

                        $filenamewithextension = $request->file('upload')->getClientOriginalName();

                        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                        $extension = $request->file('upload')->getClientOriginalExtension();

                        $filenametostore = $filename.'_'.time().'.'.$extension;

                        $request->file('upload')->move(public_path('file'), $filenametostore);

                        $CKEditorFuncNum = $request->input('CKEditorFuncNum');

                        $url = asset('file/'.$filenametostore);

                        $msg = 'Image successfully uploaded';

                        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

                        @header('Content-type: text/html; charset=utf-8');
                        echo $re;
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($berita)
    {
        $berita = Berita::where('id', $berita)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data berita',
            'data'    => $berita
        ]);
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
    public function update(Request $request, $berita)
    {
        $berita = Berita::where('id', $berita)->first();

        $this->validate($request, [
            'foto' => 'file|mimes:jpg,jpeg,bmp,png',
            'judul' => 'required|min:3|max:255',
            'content' => 'required|min:3'
        ]);

        if ($request->hasFile('foto')) {

            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $type = $request->file('foto')->getClientMimeType();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filenameSimpan = time() . '.' . $extension;
            $size = $request->file('foto')->getSize();

            $foto = File::where('id', $berita->foto)->first();

            unlink(public_path('file/' . $foto->name));

            $request->file('foto')->move(public_path('file'), $filenameSimpan);

            $file = File::FirstOrCreate([
                'name' => $filenameSimpan,
                'type' => $type,
                'size' => $size
            ]);

            $berita->update([
                'foto' => $file->id,
                'judul' => $request->judul,
                'content' => $request->content
            ]);

        }else {
            $berita->update([
                'judul' => $request->judul,
                'content' => $request->content
            ]);
        }

        return redirect()->back()->with('success', 'Data Berhasil Diubah');
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

        // Untuk menghapus Foto yang terhubung sama berita
        $foto = File::where('id', $berita->foto)->first();
        File::where('id', $berita->foto)->delete();
        unlink(public_path('file/' . $foto->name));
        // akhir

        Berita::destroy($berita);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
