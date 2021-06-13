<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function index(){
        $data = DB::table('alumno')
            ->join("genero", "genero.idgenero","=", "genero.idgenero")
            ->select('alumno.*', 'genero.genero as genero')
            ->get();
        return view('alumno.mostrar', compact('data'));
    }
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
