@extends('layout.layout')

@section('contenido')
    <h2 class="container mt-5" style="color:floralwhite">Formulario de Contacto</h2>
    <div class="container" style="color:floralwhite">
        <form action="{{route('alumno.crear')}}" method="POST">
            @csrf
            <div class="col-12">
                <label for="nombre"  class="form-label">Nombre *</label>
                <input type="text" id="nombre" class="form-control" name="nombre"  required>
            </div>
            <div class="col-12">
                <label for="edad" class="form-label">Edad *</label>
                <input type="number" id="edad" class="form-control" name="edad" required>
            </div>
            <div class="form-group col-12">
                <label for="Genero">Genero</label>
                <div class="input-group mb-3">
                    <select class="form-control"  name="genero_idgenero">
                        @foreach((\App\Models\Genero::all() ?? [] ) as $genero)
                            <option value="{{$genero->idgenero}}">{{$genero->genero}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <input value="Enviar" type="submit" value="Submit" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
@endsection
