<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function createdata(Request $request)
    {

        $data = $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'genero_idgenero' => 'required',
        ]);
        Alumno::insert($data);
        $data = Alumno::all();

        return view('alumno.tabla', compact('data'));
    }

}
