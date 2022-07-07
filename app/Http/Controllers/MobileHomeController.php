<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileHomeController extends Controller
{
    public function media()
    {
        return view('frontend.mobile-home.media.index');
    }
}
