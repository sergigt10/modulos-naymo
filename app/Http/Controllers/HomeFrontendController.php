<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Texte;
use App\Models\Modulo;

class HomeFrontendController extends Controller
{
    public function index()
    {
        $textes = Texte::first();
        $ocasiones = Modulo::where([['categorias_id', '=', '1'], ['portada','=', 'Si']])->limit(16)->orderBy('ordre')->get();
        return view('frontend.home.index', compact('textes', 'ocasiones'));
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }
}
