<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Texte;
use App\Models\Modulo;

use Artesaos\SEOTools\Facades\SEOTools;

class HomeFrontendController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Venta de Mobile Home, Comprar Mobile Home de Ocasión');
        SEOTools::setCanonical('https://www.modulosnaymo.es/');

        $textes = Texte::first();
        $ocasiones = Modulo::where([['categorias_id', '=', '1'], ['portada','=', 'Si']])->limit(16)->orderBy('ordre')->get();
        return view('frontend.home.index', compact('textes', 'ocasiones'));
    }

    public function about()
    {
        SEOTools::setTitle('Módulos Naymo, Mobile Home, Venta de Casas Prefabricadas');
        SEOTools::setCanonical('https://www.modulosnaymo.es/casas-prefabricadas');

        return view('frontend.about.index');
    }

    public function contact()
    {
        SEOTools::setTitle('Modulos Naymo, Mobile Home, Venta de Casas Prefabricadas');
        SEOTools::setCanonical('https://www.modulosnaymo.es/contacto-mobile-home');

        return view('frontend.contact.index');
    }
}
