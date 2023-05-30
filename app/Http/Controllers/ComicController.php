<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = [
            'comics' => Comic::all(),
            'navbar' => config('db.navbar'),
            'items' => config('db.items'),
            'dcComics' => config('db.dcComics'),
            'shop' => config('db.shop'),
            'dc' => config('db.dc'),
            'sites' => config('db.sites'),
            'socials' => config('db.socials')
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function show(Comic $comic)
    {
        $data = [
            'navbar' => config('db.navbar'),
            'items' => config('db.items'),
            'dcComics' => config('db.dcComics'),
            'shop' => config('db.shop'),
            'dc' => config('db.dc'),
            'sites' => config('db.sites'),
            'socials' => config('db.socials')
        ];
        return view('comics.show', $data, compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "Products with id: {$comic->id} cancellato con successo !");
    }
}
