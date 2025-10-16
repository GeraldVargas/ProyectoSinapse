<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiPaginaController extends Controller
{
    public function index()
    {
        // Esto carga la plantilla Blade que a su vez renderiza React
        return view('app');
    }
}
