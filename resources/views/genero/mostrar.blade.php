@extends('layout.layout')



@section('contenido')
    <div class="container mt-5 ">
        <h2 style="color:floralwhite">Tabla de Mostrar</h2>
        <table class="table" style="color:floralwhite">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Genero</th>

                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->idgenero}}</td>
                    <td>{{$info->genero}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
