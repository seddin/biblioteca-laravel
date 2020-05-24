@extends('layouts.app')

@section('title', 'Permisos')

@section('content')
    <div class="blue ui buttons">
        <a href="/permisos/create" class="ui button">Añadir Permiso</a>
    </div>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Rol</th>
                <th>Permiso</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permisos as $permiso)
                <tr>
                    <td>{{ \App\Rol::find($permiso->id_rol)->nombre_rol }}</td>
                    <td>{{ $permiso->nombre_permiso }}</td>
                    <td>
                        <a class="item" href="/permisos/{{ $permiso->id }}">
                            <i class="eye layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <a class="item" href="/permisos/{{ $permiso->id }}/edit">
                            <i class="edit layout icon"></i>
                        </a>
                    </td>
                    <td>
                        <form action="/permisos/{{ $permiso->id }}" method="post">
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
            if (confirm ("¿Seguro que quieres borrar el permiso?")) {
                o.parentNode.submit();
            }
        }
    </script>
@endsection
