@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="blue ui buttons">
        <a href="/usuarios/create" class="ui button">Añadir Usuario</a>
    </div>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Fecha Entrega</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->fecha_entrega }}</td>
                    <td>
                        <a class="item" href="/usuarios/{{ $usuario->id }}">
                            <i class="eye layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="/usuarios/{{ $usuario->id }}/edit">
                            <i class="edit layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <form action="/usuarios/{{ $usuario->id }}" method="post">
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
            if (confirm ("¿Seguro que quieres borrar el usuario?")) {
                o.parentNode.submit();
            }
        }
    </script>
@endsection
