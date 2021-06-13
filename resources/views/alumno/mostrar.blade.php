@extends('layout.layout')


@section('contenido')
    <div class="container mt-5 ">
        <h2 style="color:floralwhite">Tabla de Mostrar Alumno</h2>
        <table class="table" style="color:floralwhite">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>

                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->idalumno}}</td>
                    <td>{{$info->nombre}}</td>
                    <td>{{$info->edad}}</td>
                    <td>{{$info->genero}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
