@extends('layouts.app')

@section('title', 'Autores')

@section('content')
    <div class="blue ui buttons">
        <a href="/autores/create" class="ui button">Añadir Autor</a>
    </div>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nacionalidad</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor)
                <tr>
                    <td>{{ $autor->nombre }}</td>
                    <td>{{ $autor->apellidos }}</td>
                    <td>{{ $autor->nacionalidad }}</td>
                    <td>{{ $autor->sexo == "M" ? "Mujer": "Hombre" }}</td>
                    <td>{{ $autor->edad }}</td>
                    <td>
                        <a class="item" href="">
                            <i class="eye layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="">
                            <i class="edit layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="">
                            <i class="eraser layout icon"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
