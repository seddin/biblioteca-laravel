@extends('layouts.app')

@section('title', 'Datos del permiso')

@section('content')
    <form class="ui form" action="/permisos/{{ $permiso->id }}" method="POST">
        @method('patch')
        @csrf
        <div class="field">
            <label>Rol</label>
            <select name="id_rol" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar rol...</option>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}" {{ $rol->id == $permiso->id_rol ? 'selected="selected"': '' }}>{{ $rol->nombre_rol }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Permiso</label>
            <input type="text" name="nombre_permiso" placeholder="Permiso" required="required" autocomplete="off" value="{{ $permiso->nombre_permiso }}">
        </div>
        <button class="ui button" type="submit">Actualizar</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
