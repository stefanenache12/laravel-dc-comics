<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



//Models

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //VALIDATION

        $request->validate([

            'title' => 'required|max:250',
            'description' => 'required',
            'thumb' => 'max:1024|nullable',
            'price' => 'required|numeric',
            'series' => 'max:64|nullable',
            'sale_date' => 'date|nullable',
            'type' => 'max:64|nullable',
            'artists' => 'nullable',
            'witers' => 'nullable'
        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di 250 caratteri',
            'description.required' => 'La descrizione è obligatoria',
            'thumb.max' => 'Il Link non pùo essere più lungo di 1024 caratteri',
            'price.required' => 'Il prezzo è obligatorio',
            'price.numeric' => ' Il prezzo deve essere un numero',
            'series.max' => 'La serie non pùo essere più lunga di 64 caratteri',
            'type.max' => 'Il tipo non pùo essere più lungo di 64 caratteri',
        ]  
    );

        $formData = $request->all();

        $comic = new Comic();

        $comic -> title = $formData['title'];
        $comic -> description = $formData['description'];
        $comic -> thumb = $formData['thumb'];
        $comic -> price = $formData['price'];
        $comic -> series = $formData['series'];
        $comic -> sale_date = $formData['sale_date'];
        $comic -> type = $formData['type'];
        $comic -> artists = $formData['artists'];
        $comic -> writers = $formData['writers'];
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('admin.comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('admin.comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::findOrFail($id);

        $request->validate([

            'title' => 'required|max:250',
            'description' => 'required',
            'thumb' => 'max:1024|nullable',
            'price' => 'required|numeric',
            'series' => 'max:64|nullable',
            'sale_date' => 'date|nullable',
            'type' => 'max:64|nullable',
            'artists' => 'nullable',
            'witers' => 'nullable'
        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di 250 caratteri',
            'description.required' => 'La descrizione è obligatoria',
            'thumb.max' => 'Il Link non pùo essere più lungo di 1024 caratteri',
            'price.required' => 'Il prezzo è obligatorio',
            'price.numeric' => ' Il prezzo deve essere un numero',
            'series.max' => 'La serie non pùo essere più lunga di 64 caratteri',
            'type.max' => 'Il tipo non pùo essere più lungo di 64 caratteri',
        ]  
    );
        $formData = $request->all();

        $comic -> title = $formData['title'];
        $comic -> description = $formData['description'];
        $comic -> thumb = $formData['thumb'];
        $comic -> price = $formData['price'];
        $comic -> series = $formData['series'];
        $comic -> sale_date = $formData['sale_date'];
        $comic -> type = $formData['type'];
        $comic -> artists = $formData['artists'];
        $comic -> writers = $formData['writers'];
        $comic->save();

        return redirect()->route('comics.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
