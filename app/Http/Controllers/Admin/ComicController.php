<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
        $data = $this->validation($request->all());
        $comic = new Comic();
        $comic->fill($data);
        // $comic->title = $data['title'];
        // $comic->series = $data['series'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->type = $data['type'];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $editData = $this->validation($request->all());
        $comic->update($editData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validationResult = Validator::make($data, [
            'title' => 'required|min:8|max:100',
            'series' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'type' => 'required'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'La lunghezza minima del titolo è di min: caratteri',
            'title.max' => 'La lunghezza massima del titolo è di max: caratteri',
            'series.required' => 'La serie è obbligatoria',
            'thumb.required' => "L'immagine è obbligatoria",
            'price.required' => 'Il prezzo è obbligatorio',
            'type.required' => 'La tipologia è obbligatoria'
        ])->validate();
        return $validationResult;
    }
}
