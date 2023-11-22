<?php

namespace App\Http\Controllers;

use App\Models\Sambutanketua;
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
        $send['data'] = Sambutanketua::all();
        return view("admin.sambutanketua", $send);
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
