<?php

namespace App\Http\Controllers;

use App\Models\Sambutanketua;
use App\Models\File;
use Illuminate\Http\Request;

class SambutanketuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutanketua = Sambutanketua::orderBy('id', 'desc')->first();
        return view('admin.sambutanketua', [
            'sambutanketua' => $sambutanketua
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sambutanketua  $sambutanketua
     * @return \Illuminate\Http\Response
     */
    public function show(Sambutanketua $sambutanketua)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sambutanketua  $sambutanketua
     * @return \Illuminate\Http\Response
     */
    public function edit(Sambutanketua $sambutanketua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sambutanketua  $sambutanketua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sambutanketua $sambutanketua)
    {

        //
        $sambutanketua = Sambutanketua::where('id', $sambutanketua->id)->first();
        $this->validate($request, [
            'foto'      => 'file|mimes:jpg,jpeg,bmp,png',
            'title'     => 'required|min:3|max:255',
            'subtitle'  => 'required|min:3|max:255',
            'tentang'   => 'required|min:3'
        ]);

        if ($request->hasFile('foto')) {

            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $type = $request->file('foto')->getClientMimeType();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filenameSimpan = time() . '.' . $extension;
            $size = $request->file('foto')->getSize();

            $foto = File::where('id', $sambutanketua->foto)->first();

            unlink(public_path('file/' . $foto->name));

            $request->file('foto')->move(public_path('file'), $filenameSimpan);

            $file = File::FirstOrCreate([
                'name' => $filenameSimpan,
                'type' => $type,
                'size' => $size
            ]);

            $sambutanketua->update([
                'foto'      => $file->id,
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,
                'tentang'   => $request->tentang
            ]);

        }else {
            $sambutanketua->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,
                'tentang'   => $request->tentang
            ]);
        }

        return redirect()->back()->with('success', 'Data Berhasil Diubah');

        //
        // $rules = [
        //     'title'     => 'required|min:3|max:255',
        //     'subtitle'  => 'required|min:3|max:255',
        //     'tentang'   => 'required|min:3'
        // ];

        // $validatedData = $request->validate($rules);

        // Sambutanketua::where('id', $sambutanketua->id)
        //                 ->update($validatedData);

        // return redirect()->route('sambutanketua.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sambutanketua  $sambutanketua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sambutanketua $sambutanketua)
    {
        //
    }
}