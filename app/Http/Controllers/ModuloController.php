<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();

        return view('backend.modulos.index')
            ->with('modulos', $modulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('backend.modulos.create')
                    ->with('categorias', $categorias);
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
            'titol' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_esp' => 'required',
            'foto' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'data_publicacio' => 'required|date',
            'embed_spotify' => '',
            'link_spotify' => '',
            'link_apple_music' => '',
            'link_venda_fisica' => '',
            'generes_id' => '',
            'artistes_id' => '',
            'tipus_id' => '',
        ]);/* Max foto 10 MB */

        $ruta_foto = $request['foto']->store('backend/modulos', 'public');

        $foto = Image::make( storage_path("app/public/{$ruta_foto}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
        $foto->save();

        $modulo = new Modulo($data);
        $modulo->foto = $ruta_foto;
        $modulo->save();

        // Redireccionar
        return redirect()->action('ModuloController@index')->with('estat', 'Inserit correctament.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show(Modulo $modulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulo $modulo)
    {
        $tipus = Tipu::all();

        return view('backend.modulos.edit', compact('modulo'))->with('tipus', $tipus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulo $modulo)
    {
        // Validació
        $data = $request->validate([
            'titol' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_esp' => 'required',
            'data_publicacio' => 'required|date',
            'embed_spotify' => '',
            'link_spotify' => '',
            'link_apple_music' => '',
            'link_venda_fisica' => '',
            'generes_id' => '',
            'artistes_id' => '',
            'tipus_id' => '',
        ]);

        // Asignar los valores
        $modulo->titol = $data['titol'];
        $modulo->embed_spotify = $data['embed_spotify'];
        $modulo->descripcio_cat = $data['descripcio_cat'];
        $modulo->descripcio_esp = $data['descripcio_esp'];
        $modulo->data_publicacio = $data['data_publicacio'];
        $modulo->link_spotify = $data['link_spotify'];
        $modulo->link_apple_music = $data['link_apple_music'];
        $modulo->link_venda_fisica = $data['link_venda_fisica'];
        $modulo->generes_id = $data['generes_id'];
        $modulo->artistes_id = $data['artistes_id'];
        $modulo->tipus_id = $data['tipus_id'];

        // Si el usuario sube una nueva imagen
        if($request['foto']) {

            $ruta_foto = $request['foto']->store('backend/modulos', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_foto}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->foto"))) {
                File::delete(storage_path("app/public/$modulo->foto"));
                // Asignar al objeto
                $modulo->foto = $ruta_foto;
            }  
        }

        $modulo->save();

        // Redireccionar
        return redirect()->action('ModuloController@index')->with('estat', 'Modificat correctament.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulo $modulo)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$modulo->foto"))) {
            File::delete(storage_path("app/public/$modulo->foto"));
        }

        $modulo->delete();

        return redirect()->action('ModuloController@index');
    }
}
