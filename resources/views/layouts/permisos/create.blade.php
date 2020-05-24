@extends('layouts.app')

@section('title', 'Añadir Permiso')

@section('content')
    <form action="/permisos" method="POST" class="ui form">
        @csrf
        <div class="field">
            <label>Rol</label>
            <select name="id_rol" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar rol...</option>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->nombre_rol }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Permiso</label>
            <input type="text" name="nombre_permiso" placeholder="Permiso" required="required" autocomplete="off">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
