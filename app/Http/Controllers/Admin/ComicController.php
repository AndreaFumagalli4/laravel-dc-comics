<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display all comics from db.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.index', compact('comics'));
    }

    /**
     * Show the form for creating a new comic.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', [ 'comic' => new Comic() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
                'title' => 'required|min:2|max:100',
                'description' => 'required|min:10',
                'thumb' => 'required|active_url',
                'price' => 'required|decimal:2',
                'series' => 'required|min:2|max:50',
                'sale_date' => 'required|date|before:today|after:1934',
                'type' => 'required|min:2|max:30',
            ],
            [
                'title.required' => 'Il titolo è obbligatorio; per favore inserisci un titolo',
                'title.min' => 'Hai scritto un titolo troppo corto; per favore inseriscine uno più lungo',
                'title.max' => 'Hai scritto un titolo troppo lungo; per favore inseriscine uno più corto',
                'description.required' => 'La descrizione è obbligatoria; per favore inseriscila',
                'description.min' => 'Hai scritto una descrizione troppo corta; per favore inseriscine una più lunga',
                'thumb.required' => 'L\'immagine è obbligatoria; per favore inseriscila',
                'thumb.active_url' => 'L\'url che hai inserito non è valido: inseriscine uno valido',
                'price.required' => 'Il prezzo è obbligatorio; per favore inseriscilo',
                'price.decimal' => 'Hai scritto un prezzo sbagliato; inseriscine uno giusto',
                'series.required' => 'La serie è obbligatoria; per favore inseriscila',
                'series.min' => 'Hai scritto una serie troppo corta; per favore inseriscine uno più lunga',
                'series.max' => 'Hai scritto una serei troppo lunga; per favore inseriscine uno più corta',
                'sale_date.required' => 'La data di vendita è obbligatoria; per favore inseriscila',
                'sale_date.date' => 'La data di vendita inserita è sbagliata: inseriscine una valida',
                'sale_date.before' => 'La data di vendita inserita non è valida: inseriscine una valida',
                'sale_date.after' => 'La data di vendita inserita non è valida: inseriscine una valida',
                'type.required' => 'Il tipo di fumetto è obbligatorio; per favore inseriscilo',
                'type.min' => 'Hai scritto una tipologia troppo corta; per favore inseriscine uno più lunga',
                'type.max' => 'Hai scritto una tipologia troppo lunga; per favore inseriscine uno più corta'
            ]
        );

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified comic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.show', compact('comic'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.edit', compact('comic'));
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
        $data = $request->all();

        $request->validate([
                'title' => 'required|min:2|max:100',
                'description' => 'required|min:10',
                'thumb' => 'required|active_url',
                'price' => 'required|decimal:2',
                'series' => 'required|min:2|max:50',
                'sale_date' => 'required|date|before:today',
                'type' => 'required|min:2|max:30',
            ],
            [
                'title.required' => 'Il titolo è obbligatorio; per favore inserisci un titolo',
                'title.min' => 'Hai scritto un titolo troppo corto; per favore inseriscine uno più lungo',
                'title.max' => 'Hai scritto un titolo troppo lungo; per favore inseriscine uno più corto',
                'description.required' => 'La descrizione è obbligatoria; per favore inseriscila',
                'description.min' => 'Hai scritto una descrizione troppo corta; per favore inseriscine una più lunga',
                'thumb.required' => 'L\'immagine è obbligatoria; per favore inseriscila',
                'thumb.active_url' => 'L\'url che hai inserito non è valido: inseriscine uno valido',
                'price.required' => 'Il prezzo è obbligatorio; per favore inseriscilo',
                'price.decimal' => 'Hai scritto un prezzo sbagliato; inseriscine uno giusto',
                'series.required' => 'La serie è obbligatoria; per favore inseriscila',
                'series.min' => 'Hai scritto una serie troppo corta; per favore inseriscine uno più lunga',
                'series.max' => 'Hai scritto una serei troppo lunga; per favore inseriscine uno più corta',
                'sale_date.required' => 'La data di vendita è obbligatoria; per favore inseriscila',
                'sale_date.date' => 'La data di vendita inserita è sbagliata: inseriscine una valida',
                'sale_date.before' => 'La data di vendita inserita non è valida: inseriscine una valida',
                'sale_date.after' => 'La data di vendita inserita non è valida: inseriscine una valida',
                'type.required' => 'Il tipo di fumetto è obbligatorio; per favore inseriscilo',
                'type.min' => 'Hai scritto una tipologia troppo corta; per favore inseriscine uno più lunga',
                'type.max' => 'Hai scritto una tipologia troppo lunga; per favore inseriscine uno più corta'
            ]
        );

        $comic = Comic::findOrFail($id);
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
