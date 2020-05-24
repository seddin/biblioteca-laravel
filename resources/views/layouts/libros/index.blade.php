@extends('layouts.app')

@section('title', 'Libros')

@section('content')
    <div class="blue ui buttons">
        <a href="/libros/create" class="ui button">Añadir Libro</a>
    </div>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ \App\Autor::find($libro->id_autor)->nombre }} {{ \App\Autor::find($libro->id_autor)->apellidos }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->categoria }}</td>
                    <td>{{ $libro->descripcion }}</td>
                    <td>{{ $libro->precio }}</td>
                    <td>
                        <a class="item" href="/libros/{{ $libro->id }}">
                            <i class="eye layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="/libros/{{ $libro->id }}/edit">
                            <i class="edit layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <form action="/libros/{{ $libro->id }}" method="post">
                            @method("delete")
                            @csrf

                            <a class="item" type="submit" onclick="eliminar(this)">
                                <i class="eraser layout icon"></i>
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script type="text/javascript">
        function eliminar (o) {
            if (confirm ("¿Seguro que quieres borrar el libro?")) {
                o.parentNode.submit();
            }
        }
    </script>
@endsection
