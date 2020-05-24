@extends('layouts.app')

@section('title', 'Datos del rol')

@section('content')
    <form class="ui form" action="/rolesusuarios/{{ $rol->id }}" method="POST">
        @method('patch')
        @csrf
        <div class="field">
            <label>Usuario</label>
            <select name="id_usuario" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar usuario...</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}"  {{ $usuario->id == $rol->id_usuario ? 'selected="selected"': '' }}>{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Rol</label>
            <input type="text" name="nombre_rol" placeholder="Rol" required="required" autocomplete="off" value="{{$rol->nombre_rol}}">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
