<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(Request $request)
    {
        $data = Genero::all();
        return view('genero.mostrar', compact('data'));
    }
    public function createdata(Request $request){
        $data = $request->validate([
            'genero' => 'required',
        ]);

        Genero::insert($data);
        $data = Genero::all();
        return view('genero.mostrar', compact('data'));

    }
}
