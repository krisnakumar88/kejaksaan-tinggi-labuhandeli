<?php

namespace App\Http\Controllers;

use App\Models\Subhalaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\File;
use App\Models\Halaman;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Type\NullType;

class SubhalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send['data'] = Subhalaman::all();
        $send['kategori_halaman'] = Halaman::all();
        return view('admin.subhalaman', $send);
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

        // dd($request);
        if ($request->link != "") {

            $validatedData = $this->validate($request, [
                'id_halaman' => 'required',
                'judul' => 'required|min:3',
                'link' => 'required'
            ]);

            $validatedData['user_id'] = Auth::user()->id;

            $berita = Subhalaman::create([
                'id_halaman' => $validatedData['id_halaman'],
                'judul' => $validatedData['judul'],
                'link' => $validatedData['link'],
                'content' => "",
                'foto' => "",
                'slug' => "",
                'user_id' => Auth::user()->id
            ]);

        } else {
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
                'id_halaman' => 'required',
                'judul' => 'required|min:3',
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

            $berita = Subhalaman::create($validatedData);
            $request->file('foto')->move(public_path('file'), $filenameSimpan);

        }

        return redirect()->route('subhalaman.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function upload_foto(Request $request)
    {
        if ($request->hasFile('upload')) {

            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('upload')->getClientOriginalExtension();

            $filenametostore = $filename . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('file'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('file/' . $filenametostore);

            $msg = 'Image successfully uploaded';

            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subhalaman  $subhalaman
     * @return \Illuminate\Http\Response
     */
    public function show($subhalaman)
    {
        $subhalaman = Subhalaman::where('id', $subhalaman)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data' => $subhalaman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subhalaman  $subhalaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Subhalaman $subhalaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subhalaman  $subhalaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subhalaman)
    {
        $subhalaman = Subhalaman::where('id', $subhalaman)->first();



        if ($request->link != "" && $subhalaman->link != "") {

            $this->validate($request, [
                'judul' => 'required|min:3|max:255',
                'id_halaman' => 'required',
                'link' => 'required'
            ]);

            $subhalaman->update([
                'judul' => $request->judul,
                'link' => $request->link,
                'id_halaman' => $request->id_halaman
            ]);

        } else {

            $this->validate($request, [
                'foto' => 'file|mimes:jpg,jpeg,bmp,png',
                'judul' => 'required|min:3|max:255',
                'content' => 'required|min:3',
                'id_halaman' => 'required'
            ]);

            if ($request->hasFile('foto')) {

                $filenameWithExt = $request->file('foto')->getClientOriginalName();
                $type = $request->file('foto')->getClientMimeType();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('foto')->getClientOriginalExtension();
                $filenameSimpan = time() . '.' . $extension;
                $size = $request->file('foto')->getSize();

                $foto = File::where('id', $subhalaman->foto)->first();

                unlink(public_path('file/' . $foto->name));

                $request->file('foto')->move(public_path('file'), $filenameSimpan);

                $file = File::FirstOrCreate([
                    'name' => $filenameSimpan,
                    'type' => $type,
                    'size' => $size
                ]);

                $subhalaman->update([
                    'foto' => $file->id,
                    'judul' => $request->judul,
                    'content' => $request->content,
                    'id_halaman' => $request->id_halaman
                ]);

            } else {
                $subhalaman->update([
                    'judul' => $request->judul,
                    'content' => $request->content,
                    'id_halaman' => $request->id_halaman
                ]);
            }

        }



        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subhalaman  $subhalaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($subhalaman)
    {
        $subhalaman = Subhalaman::where('id', $subhalaman)->first();

        if ($subhalaman->link == "") {
            $foto = File::where('id', $subhalaman->foto)->first();
            File::where('id', $subhalaman->foto)->delete();
            unlink(public_path('file/' . $foto->name));
        }

        Subhalaman::destroy($subhalaman);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
