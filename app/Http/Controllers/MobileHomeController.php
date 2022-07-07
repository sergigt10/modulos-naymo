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
}
