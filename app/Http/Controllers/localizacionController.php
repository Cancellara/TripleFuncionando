<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class localizacionController extends Controller
{
    public function test($locale)
    {
        App::setLocale($locale);

        return view('localizacion1');
    }

    public function test2($locale)
    {
        App::setLocale($locale);

        return view('localizacion2');
    }
}
