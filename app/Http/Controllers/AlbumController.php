<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.album.createalbum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Album();
        $photo = new Photo();

        $photo -> src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $photo -> save();

        $store -> name = $request -> name;
        $store -> author = $request -> author;
        $store -> photo_id = $photo -> id;
        $store -> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $photo = Photo::find($album->photo_id);
        return view('pages.album.editalbum', compact('album', 'photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $photo = Photo::find($album->photo_id);
        Storage::delete('public/'. $photo->src);
        $photo -> src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $photo -> save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album -> delete();
        $delete = Photo::find($album->photo_id);
        Storage::delete('public/'. $delete->src );
        $delete -> delete();
        return redirect('/');
    }
}
