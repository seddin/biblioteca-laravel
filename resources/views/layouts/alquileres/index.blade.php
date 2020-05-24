@extends('layouts.app')

@section('title', 'Alquileres')

@section('content')
    <div class="blue ui buttons">
        <a href="/alquileres/create" class="ui button">Añadir Alquiler</a>
    </div>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Libro</th>
                <th>Fecha Prestamo</th>
                <th>Fecha Devolucion</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alquileres as $alquiler)
                <tr>
                    <td>{{ \App\Usuario::find($alquiler->id_usuario)->nombre }}</td>
                    <td>{{ \App\Libro::find($alquiler->id_libro)->titulo }}</td>
                    <td>{{ $alquiler->fecha_prestamo }}</td>
                    <td>{{ $alquiler->fecha_devolucion }}</td>
                    <td>
                        <a class="item" href="/alquileres/{{ $alquiler->id }}">
                            <i class="eye layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="/alquileres/{{ $alquiler->id }}/edit">
                            <i class="edit layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <form action="/alquileres/{{ $alquiler->id }}" method="post">
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
            if (confirm ("¿Seguro que quieres borrar el alquiler?")) {
                o.parentNode.submit();
            }
        }
    </script>
@endsection
