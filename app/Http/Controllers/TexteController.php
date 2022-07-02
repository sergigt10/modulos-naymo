<?php

namespace App\Http\Controllers;

use App\Models\Texte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class TexteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textes = Texte::all();

        return view('backend.textes.index')
            ->with('textes', $textes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.textes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'descripcio' => 'required'
        ]);

        $texte = new Texte($data);
        $texte->save();

        // Redireccionar
        return redirect()->action('TexteController@index')->with('estat', 'Guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Texte  $texte
     * @return \Illuminate\Http\Response
     */
    public function show(Texte $texte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Texte  $texte
     * @return \Illuminate\Http\Response
     */
    public function edit(Texte $texte)
    {
        return view('backend.textes.edit', compact('texte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Texte  $texte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Texte $texte)
    {
        // Validació
        $data = $request->validate([
            'descripcio' => 'required'
        ]);

        // Asignar los valores
        $texte->descripcio = $data['descripcio'];

        $texte->save();

        // Redireccionar
        return redirect()->action('TexteController@index')->with('estat', 'Modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Texte  $texte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Texte $texte)
    {
        $texte->delete();

        return redirect()->action('TexteController@index');
    }
}
