<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;

class MobileHomeController extends Controller
{
    public function media()
    {
        $gamaMedia = Modulo::where('categorias_id', '=', '3')->firstOrFail();
        return view('frontend.mobile-home.media.index', compact('gamaMedia'));
    }

    public function alta()
    {
        $gamaAlta = Modulo::where('categorias_id', '=', '2')->firstOrFail();
        return view('frontend.mobile-home.alta.index', compact('gamaAlta'));
    }

    public function transporte()
    {
        $transporte = Modulo::where('categorias_id', '=', '5')->firstOrFail();
        return view('frontend.mobile-home.transporte.index', compact('transporte'));
    }

    public function accesorios()
    {
        $accesorios = Modulo::where('categorias_id', '=', '4')->firstOrFail();
        return view('frontend.mobile-home.accesorios.index', compact('accesorios'));
    }

    public function ocasion()
    {
        $ocasiones = Modulo::where('categorias_id', '=', '1')->orderBy('ordre')->get();
        return view('frontend.mobile-home.ocasion.index', compact('ocasiones'));
    }

    public function ocasionShow($id)
    {
        $ocasion = Modulo::where('id','=', $id)->firstOrFail();
        return view('frontend.mobile-home.ocasion.show', compact('ocasion'));
    }
}
