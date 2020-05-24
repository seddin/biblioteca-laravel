@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="blue ui buttons">
        <a href="/rolesusuarios/create" class="ui button">Añadir Rol</a>
    </div>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Rol</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ \App\Usuario::find($rol->id_usuario)->nombre }}</td>
                    <td>{{ $rol->nombre_rol }}</td>
                    <td>
                        <a class="item" href="/rolesusuarios/{{ $rol->id }}">
                            <i class="eye layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="/rolesusuarios/{{ $rol->id }}/edit">
                            <i class="edit layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <form action="/rolesusuarios/{{ $rol->id }}" method="post">
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
