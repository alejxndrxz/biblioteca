<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class HomeController extends Controller
{
    public function index()
    {
        $libros = Libro::all(); // Sin paginación en Home
        
        return view('home.index', compact('libros'));
    }
}
