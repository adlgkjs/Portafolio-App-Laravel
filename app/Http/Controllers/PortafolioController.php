<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::paginate();
        return view('welcome', compact('proyectos'));            
    }
}
