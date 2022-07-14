<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str as Str;

class MobileHomeController extends Controller
{
    public function media()
    {
        SEOTools::setTitle('Mobil Home a Medida, Mobile Home a Medida, Mobil home ocasion');

        $gamaMedia = Modulo::where('categorias_id', '=', '3')->firstOrFail();
        return view('frontend.mobile-home.media.index', compact('gamaMedia'));
    }

    public function alta()
    {
        SEOTools::setTitle('Venta de Mobile Home de Hormigón a Medida, Mobil Home gama alta');

        $gamaAlta = Modulo::where('categorias_id', '=', '2')->firstOrFail();
        return view('frontend.mobile-home.alta.index', compact('gamaAlta'));
    }

    public function transporte()
    {
        SEOTools::setTitle('Transporte Mobile home, Mobile Home transporte, Oferta Mobil home');

        $transporte = Modulo::where('categorias_id', '=', '5')->firstOrFail();
        return view('frontend.mobile-home.transporte.index', compact('transporte'));
    }

    public function accesorios()
    {
        SEOTools::setTitle('Accesorios para Mobile Home y Mobile Home de Ocasión');

        $accesorios = Modulo::where('categorias_id', '=', '4')->firstOrFail();
        return view('frontend.mobile-home.accesorios.index', compact('accesorios'));
    }

    public function ocasion()
    {
        SEOTools::setTitle('Venta de Mobile Home de Segunda Mano y de Ocasión');

        $ocasiones = Modulo::where('categorias_id', '=', '1')->orderBy('ordre')->get();
        return view('frontend.mobile-home.ocasion.index', compact('ocasiones'));
    }

    public function ocasionShow($id)
    {
        $ocasion = Modulo::where('id','=', $id)->firstOrFail();

        SEOTools::setTitle('Mobile home ocasión, mobil home, Mobil home de segunda mano');
        SEOTools::setDescription(Str::limit(strip_tags($ocasion->descripcio)), 155, ' (...)');
        
        return view('frontend.mobile-home.ocasion.show', compact('ocasion'));
    }
}
