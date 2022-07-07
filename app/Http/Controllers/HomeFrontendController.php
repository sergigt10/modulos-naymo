<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }
}
