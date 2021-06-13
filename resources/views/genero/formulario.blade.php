@extends('layout.layout')

@section('contenido')
    <form class="container mt-5" action="{{route('genero.crear')}}" method="POST">
        @csrf
        <h2>Formulario de Genero</h2>
        <div class="form-group">
            <label for="genero">Genero*</label>
            <input type="text" class="form-control" id="genero" name="genero" maxlength="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Registro</button>
    </form>
@endsection
