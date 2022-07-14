<?php

namespace App\Http\Controllers;

use App\Models\Modulo;

use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('frontend.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function statics()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');
        $statics = [
            '',
            'mobil-home-gama-media',
            'mobil-home-gama-alta',
            'mobile-home-ocasion',
            'accesorios-mobile-home',
            'transporte-mobile-home',
            'casas-prefabricadas',
            'contacto-mobile-home'
        ];
        return response()->view('frontend.sitemap.statics', [
            'statics' => $statics,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }

    public function ocasiones()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');
        
        $ocasiones = Modulo::all();
        return response()->view('frontend.sitemap.ocasiones', [
            'ocasiones' => $ocasiones,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }
}
