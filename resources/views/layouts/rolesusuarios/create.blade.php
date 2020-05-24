@extends('layouts.app')

@section('title', 'Añadir Rol Usuario')

@section('content')
    <form action="/rolesusuarios" method="POST" class="ui form">
        @csrf
        <div class="field">
            <label>Usuario</label>
            <select name="id_usuario" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar usuario...</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Rol</label>
            <input type="text" name="nombre_rol" placeholder="Rol" required="required" autocomplete="off">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
