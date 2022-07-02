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
            'descripcio' => 'required',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge2' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge3' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge4' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge5' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge6' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge7' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge8' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge9' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge10' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge11' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge12' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge13' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge14' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge15' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge16' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge17' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge18' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge19' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge20' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'marca' => '',
            'modelo' => '',
            'medida' => '',
            'num_hab' => '',
            'num_plazas' => '',
            'ano' => '',
            'precio' => '',
            'categorias_id' => '',
            'portada' => '',
            'ordre' => ''
        ]);/* Max foto 10 MB */

        $ruta_foto_1 = $request['imatge1']->store('backend/modulos', 'public');

        $imatge1 = Image::make( storage_path("app/public/{$ruta_foto_1}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();
        if($request['imatge2']) {
            $ruta_foto_2 = $request['imatge2']->store('backend/modulos', 'public');

            $imatge2 = Image::make( storage_path("app/public/{$ruta_foto_2}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge2->save();
        }
        if($request['imatge3']) {
            $ruta_foto_3 = $request['imatge3']->store('backend/modulos', 'public');
            $imatge3 = Image::make( storage_path("app/public/{$ruta_foto_3}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge3->save();
        }
        if($request['imatge4']) {
            $ruta_foto_4 = $request['imatge4']->store('backend/modulos', 'public');
            
            $imatge4 = Image::make( storage_path("app/public/{$ruta_foto_4}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge4->save();
        }
        if($request['imatge5']) {
            $ruta_foto_5 = $request['imatge5']->store('backend/modulos', 'public');
            
            $imatge5 = Image::make( storage_path("app/public/{$ruta_foto_5}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge5->save();
        }
        if($request['imatge6']) {
            $ruta_foto_6 = $request['imatge6']->store('backend/modulos', 'public');

            $imatge6 = Image::make( storage_path("app/public/{$ruta_foto_6}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge6->save();
        }
        if($request['imatge7']) {
            $ruta_foto_7 = $request['imatge7']->store('backend/modulos', 'public');

            $imatge7 = Image::make( storage_path("app/public/{$ruta_foto_7}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge7->save();
        }
        if($request['imatge8']) {
            $ruta_foto_8 = $request['imatge8']->store('backend/modulos', 'public');

            $imatge8 = Image::make( storage_path("app/public/{$ruta_foto_8}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge8->save();
        }
        if($request['imatge9']) {
            $ruta_foto_9 = $request['imatge9']->store('backend/modulos', 'public');

            $imatge9 = Image::make( storage_path("app/public/{$ruta_foto_9}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge9->save();
        }
        if($request['imatge10']) {
            $ruta_foto_10 = $request['imatge10']->store('backend/modulos', 'public');

            $imatge10 = Image::make( storage_path("app/public/{$ruta_foto_10}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge10->save();
        }
        if($request['imatge11']) {
            $ruta_foto_11 = $request['imatge11']->store('backend/modulos', 'public');

            $imatge11 = Image::make( storage_path("app/public/{$ruta_foto_11}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge11->save();
        }
        if($request['imatge12']) {
            $ruta_foto_12 = $request['imatge12']->store('backend/modulos', 'public');

            $imatge12 = Image::make( storage_path("app/public/{$ruta_foto_12}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge12->save();
        }
        if($request['imatge13']) {
            $ruta_foto_13 = $request['imatge13']->store('backend/modulos', 'public');

            $imatge13 = Image::make( storage_path("app/public/{$ruta_foto_13}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge13->save();
        }
        if($request['imatge14']) {
            $ruta_foto_14 = $request['imatge14']->store('backend/modulos', 'public');

            $imatge14 = Image::make( storage_path("app/public/{$ruta_foto_14}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge14->save();
        }
        if($request['imatge15']) {
            $ruta_foto_15 = $request['imatge15']->store('backend/modulos', 'public');

            $imatge15 = Image::make( storage_path("app/public/{$ruta_foto_15}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge15->save();
        }
        if($request['imatge16']) {
            $ruta_foto_16 = $request['imatge16']->store('backend/modulos', 'public');

            $imatge16 = Image::make( storage_path("app/public/{$ruta_foto_16}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge16->save();
        }
        if($request['imatge17']) {
            $ruta_foto_17 = $request['imatge17']->store('backend/modulos', 'public');

            $imatge17 = Image::make( storage_path("app/public/{$ruta_foto_17}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge17->save();
        }
        if($request['imatge18']) {
            $ruta_foto_18 = $request['imatge18']->store('backend/modulos', 'public');

            $imatge18 = Image::make( storage_path("app/public/{$ruta_foto_18}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge18->save();
        }
        if($request['imatge19']) {
            $ruta_foto_19 = $request['imatge19']->store('backend/modulos', 'public');

            $imatge19 = Image::make( storage_path("app/public/{$ruta_foto_19}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge19->save();
        }
        if($request['imatge20']) {
            $ruta_foto_20 = $request['imatge20']->store('backend/modulos', 'public');

            $imatge20 = Image::make( storage_path("app/public/{$ruta_foto_20}") )->resize(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge20->save();
        }

        $modulo = new Modulo($data);
        $modulo->imatge1 = $ruta_foto_1;
        if($request['imatge2']) { $modulo->imatge2 = $ruta_foto_2; }
        if($request['imatge3']) { $modulo->imatge3 = $ruta_foto_3; }
        if($request['imatge4']) { $modulo->imatge4 = $ruta_foto_4; }
        if($request['imatge5']) { $modulo->imatge5 = $ruta_foto_5; }
        if($request['imatge6']) { $modulo->imatge6 = $ruta_foto_6; }
        if($request['imatge7']) { $modulo->imatge7 = $ruta_foto_7; }
        if($request['imatge8']) { $modulo->imatge8 = $ruta_foto_8; }
        if($request['imatge9']) { $modulo->imatge9 = $ruta_foto_9; }
        if($request['imatge10']) { $modulo->imatge10 = $ruta_foto_10; }
        if($request['imatge11']) { $modulo->imatge11 = $ruta_foto_11; }
        if($request['imatge12']) { $modulo->imatge12 = $ruta_foto_12; }
        if($request['imatge13']) { $modulo->imatge13 = $ruta_foto_13; }
        if($request['imatge14']) { $modulo->imatge14 = $ruta_foto_14; }
        if($request['imatge15']) { $modulo->imatge15 = $ruta_foto_15; }
        if($request['imatge16']) { $modulo->imatge16 = $ruta_foto_16; }
        if($request['imatge17']) { $modulo->imatge17 = $ruta_foto_17; }
        if($request['imatge18']) { $modulo->imatge18 = $ruta_foto_18; }
        if($request['imatge19']) { $modulo->imatge19 = $ruta_foto_19; }
        if($request['imatge20']) { $modulo->imatge20 = $ruta_foto_20; }
        $modulo->save();

        // Redireccionar
        return redirect()->action('ModuloController@index')->with('estat', 'Guardado correctamente.');
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
        $categorias = Categoria::all();

        return view('backend.modulos.edit', compact('modulo'))->with('categorias', $categorias);
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
            'descripcio' => 'required',
            'marca' => '',
            'modelo' => '',
            'medida' => '',
            'num_hab' => '',
            'num_plazas' => '',
            'ano' => '',
            'precio' => '',
            'categorias_id' => '',
            'portada' => '',
            'ordre' => ''
        ]);

        // Asignar los valores
        $modulo->titol = $data['titol'];
        $modulo->descripcio = $data['descripcio'];
        $modulo->marca = $data['marca'];
        $modulo->modelo = $data['modelo'];
        $modulo->medida = $data['medida'];
        $modulo->num_hab = $data['num_hab'];
        $modulo->num_plazas = $data['num_plazas'];
        $modulo->ano = $data['ano'];
        $modulo->precio = $data['precio'];
        $modulo->categorias_id = $data['categorias_id'];
        $modulo->portada = $data['portada'];
        $modulo->ordre = $data['ordre'];

        // Eliminar imatge si l'usuari escull l'opció
        if($request['del_img2'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge2"));
            $modulo->imatge2 = "";
        }
        if($request['del_img3'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge3"));
            $modulo->imatge3 = "";
        }
        if($request['del_img4'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge4"));
            $modulo->imatge4 = "";
        }
        if($request['del_img5'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge5"));
            $modulo->imatge5 = "";
        }
        if($request['del_img6'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge6"));
            $modulo->imatge6 = "";
        }
        if($request['del_img7'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge7"));
            $modulo->imatge7 = "";
        }
        if($request['del_img8'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge8"));
            $modulo->imatge8 = "";
        }
        if($request['del_img9'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge9"));
            $modulo->imatge9 = "";
        }
        if($request['del_img10'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge10"));
            $modulo->imatge10 = "";
        }
        if($request['del_img11'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge11"));
            $modulo->imatge11 = "";
        }
        if($request['del_img12'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge12"));
            $modulo->imatge12 = "";
        }
        if($request['del_img13'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge13"));
            $modulo->imatge13 = "";
        }
        if($request['del_img14'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge14"));
            $modulo->imatge14 = "";
        }
        if($request['del_img15'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge15"));
            $modulo->imatge15 = "";
        }
        if($request['del_img16'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge16"));
            $modulo->imatge16 = "";
        }
        if($request['del_img17'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge17"));
            $modulo->imatge17 = "";
        }
        if($request['del_img18'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge18"));
            $modulo->imatge18 = "";
        }
        if($request['del_img19'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge19"));
            $modulo->imatge19 = "";
        }
        if($request['del_img20'] == "1"){
            File::delete(storage_path("app/public/$modulo->imatge20"));
            $modulo->imatge20 = "";
        }

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {

            $ruta_foto_1 = $request['imatge1']->store('backend/modulos', 'public');

            $imatge1 = Image::make( storage_path("app/public/{$ruta_foto_1}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge1->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge1"))) {
                File::delete(storage_path("app/public/$modulo->imatge1"));
                // Asignar al objeto
                $modulo->imatge1 = $ruta_foto_1;
            }  
        }
        if($request['imatge2']) {

            $ruta_foto_2 = $request['imatge2']->store('backend/modulos', 'public');

            $imatge2 = Image::make( storage_path("app/public/{$ruta_foto_2}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge2->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge2"))) {
                File::delete(storage_path("app/public/$modulo->imatge2"));
                // Asignar al objeto
                $modulo->imatge2 = $ruta_foto_2;
            }  
        }
        if($request['imatge3']) {

            $ruta_foto_3 = $request['imatge3']->store('backend/modulos', 'public');

            $imatge3 = Image::make( storage_path("app/public/{$ruta_foto_3}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge3->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge3"))) {
                File::delete(storage_path("app/public/$modulo->imatge3"));
                // Asignar al objeto
                $modulo->imatge3 = $ruta_foto_3;
            }  
        }
        if($request['imatge4']) {

            $ruta_foto_4 = $request['imatge4']->store('backend/modulos', 'public');

            $imatge4 = Image::make( storage_path("app/public/{$ruta_foto_4}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge4->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge4"))) {
                File::delete(storage_path("app/public/$modulo->imatge4"));
                // Asignar al objeto
                $modulo->imatge4 = $ruta_foto_4;
            }  
        }
        if($request['imatge5']) {

            $ruta_foto_5 = $request['imatge5']->store('backend/modulos', 'public');

            $imatge5 = Image::make( storage_path("app/public/{$ruta_foto_5}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge5->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge5"))) {
                File::delete(storage_path("app/public/$modulo->imatge5"));
                // Asignar al objeto
                $modulo->imatge5 = $ruta_foto_5;
            }  
        }
        if($request['imatge6']) {

            $ruta_foto_6 = $request['imatge6']->store('backend/modulos', 'public');

            $imatge6 = Image::make( storage_path("app/public/{$ruta_foto_6}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge6->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge6"))) {
                File::delete(storage_path("app/public/$modulo->imatge6"));
                // Asignar al objeto
                $modulo->imatge6 = $ruta_foto_6;
            }  
        }
        if($request['imatge7']) {

            $ruta_foto_7 = $request['imatge7']->store('backend/modulos', 'public');

            $imatge7 = Image::make( storage_path("app/public/{$ruta_foto_7}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge7->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge7"))) {
                File::delete(storage_path("app/public/$modulo->imatge7"));
                // Asignar al objeto
                $modulo->imatge7 = $ruta_foto_7;
            }  
        }
        if($request['imatge8']) {

            $ruta_foto_8 = $request['imatge8']->store('backend/modulos', 'public');

            $imatge8 = Image::make( storage_path("app/public/{$ruta_foto_8}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge8->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge8"))) {
                File::delete(storage_path("app/public/$modulo->imatge8"));
                // Asignar al objeto
                $modulo->imatge8 = $ruta_foto_8;
            }  
        }
        if($request['imatge9']) {

            $ruta_foto_9 = $request['imatge9']->store('backend/modulos', 'public');

            $imatge9 = Image::make( storage_path("app/public/{$ruta_foto_9}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge9->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge9"))) {
                File::delete(storage_path("app/public/$modulo->imatge9"));
                // Asignar al objeto
                $modulo->imatge9 = $ruta_foto_9;
            }  
        }
        if($request['imatge10']) {

            $ruta_foto_10 = $request['imatge10']->store('backend/modulos', 'public');

            $imatge10 = Image::make( storage_path("app/public/{$ruta_foto_10}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge10->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge10"))) {
                File::delete(storage_path("app/public/$modulo->imatge10"));
                // Asignar al objeto
                $modulo->imatge10 = $ruta_foto_10;
            }  
        }
        if($request['imatge11']) {

            $ruta_foto_11 = $request['imatge11']->store('backend/modulos', 'public');

            $imatge11 = Image::make( storage_path("app/public/{$ruta_foto_11}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge11->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge11"))) {
                File::delete(storage_path("app/public/$modulo->imatge11"));
                // Asignar al objeto
                $modulo->imatge11 = $ruta_foto_11;
            }  
        }
        if($request['imatge12']) {

            $ruta_foto_12 = $request['imatge12']->store('backend/modulos', 'public');

            $imatge12 = Image::make( storage_path("app/public/{$ruta_foto_12}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge12->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge12"))) {
                File::delete(storage_path("app/public/$modulo->imatge12"));
                // Asignar al objeto
                $modulo->imatge12 = $ruta_foto_12;
            }  
        }
        if($request['imatge13']) {

            $ruta_foto_13 = $request['imatge13']->store('backend/modulos', 'public');

            $imatge13 = Image::make( storage_path("app/public/{$ruta_foto_13}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge13->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge13"))) {
                File::delete(storage_path("app/public/$modulo->imatge13"));
                // Asignar al objeto
                $modulo->imatge13 = $ruta_foto_13;
            }  
        }
        if($request['imatge14']) {

            $ruta_foto_14 = $request['imatge14']->store('backend/modulos', 'public');

            $imatge14 = Image::make( storage_path("app/public/{$ruta_foto_14}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge14->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge14"))) {
                File::delete(storage_path("app/public/$modulo->imatge14"));
                // Asignar al objeto
                $modulo->imatge14 = $ruta_foto_14;
            }  
        }
        if($request['imatge15']) {

            $ruta_foto_15 = $request['imatge15']->store('backend/modulos', 'public');

            $imatge15 = Image::make( storage_path("app/public/{$ruta_foto_15}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge15->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge15"))) {
                File::delete(storage_path("app/public/$modulo->imatge15"));
                // Asignar al objeto
                $modulo->imatge15 = $ruta_foto_15;
            }  
        }
        if($request['imatge16']) {

            $ruta_foto_16 = $request['imatge16']->store('backend/modulos', 'public');

            $imatge16 = Image::make( storage_path("app/public/{$ruta_foto_16}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge16->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge16"))) {
                File::delete(storage_path("app/public/$modulo->imatge16"));
                // Asignar al objeto
                $modulo->imatge16 = $ruta_foto_16;
            }  
        }
        if($request['imatge17']) {

            $ruta_foto_17 = $request['imatge17']->store('backend/modulos', 'public');

            $imatge17 = Image::make( storage_path("app/public/{$ruta_foto_17}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge17->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge17"))) {
                File::delete(storage_path("app/public/$modulo->imatge17"));
                // Asignar al objeto
                $modulo->imatge17 = $ruta_foto_17;
            }  
        }
        if($request['imatge18']) {

            $ruta_foto_18 = $request['imatge18']->store('backend/modulos', 'public');

            $imatge18 = Image::make( storage_path("app/public/{$ruta_foto_18}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge18->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge18"))) {
                File::delete(storage_path("app/public/$modulo->imatge18"));
                // Asignar al objeto
                $modulo->imatge18 = $ruta_foto_18;
            }  
        }
        if($request['imatge19']) {

            $ruta_foto_19 = $request['imatge19']->store('backend/modulos', 'public');

            $imatge19 = Image::make( storage_path("app/public/{$ruta_foto_19}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge19->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge19"))) {
                File::delete(storage_path("app/public/$modulo->imatge19"));
                // Asignar al objeto
                $modulo->imatge19 = $ruta_foto_19;
            }  
        }
        if($request['imatge20']) {

            $ruta_foto_20 = $request['imatge20']->store('backend/modulos', 'public');

            $imatge20 = Image::make( storage_path("app/public/{$ruta_foto_20}") )->fit(1200, 550, function($constraint){$constraint->aspectRatio();});
            $imatge20->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$modulo->imatge20"))) {
                File::delete(storage_path("app/public/$modulo->imatge20"));
                // Asignar al objeto
                $modulo->imatge20 = $ruta_foto_20;
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
        if (File::exists(storage_path("app/public/$modulo->imatge1"))) {
            File::delete(storage_path("app/public/$modulo->imatge1"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge2"))) {
            File::delete(storage_path("app/public/$modulo->imatge2"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge3"))) {
            File::delete(storage_path("app/public/$modulo->imatge3"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge4"))) {
            File::delete(storage_path("app/public/$modulo->imatge4"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge5"))) {
            File::delete(storage_path("app/public/$modulo->imatge5"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge6"))) {
            File::delete(storage_path("app/public/$modulo->imatge6"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge7"))) {
            File::delete(storage_path("app/public/$modulo->imatge7"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge8"))) {
            File::delete(storage_path("app/public/$modulo->imatge8"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge9"))) {
            File::delete(storage_path("app/public/$modulo->imatge9"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge10"))) {
            File::delete(storage_path("app/public/$modulo->imatge10"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge11"))) {
            File::delete(storage_path("app/public/$modulo->imatge11"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge12"))) {
            File::delete(storage_path("app/public/$modulo->imatge12"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge13"))) {
            File::delete(storage_path("app/public/$modulo->imatge13"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge14"))) {
            File::delete(storage_path("app/public/$modulo->imatge14"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge15"))) {
            File::delete(storage_path("app/public/$modulo->imatge15"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge16"))) {
            File::delete(storage_path("app/public/$modulo->imatge16"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge17"))) {
            File::delete(storage_path("app/public/$modulo->imatge17"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge18"))) {
            File::delete(storage_path("app/public/$modulo->imatge18"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge19"))) {
            File::delete(storage_path("app/public/$modulo->imatge19"));
        }
        if (File::exists(storage_path("app/public/$modulo->imatge20"))) {
            File::delete(storage_path("app/public/$modulo->imatge20"));
        }

        $modulo->delete();

        return redirect()->action('ModuloController@index');
    }
}
