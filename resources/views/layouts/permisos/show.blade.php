@extends('layouts.app')

@section('title', 'Datos del Permiso')

@section('content')
    <form class="ui form">
        <div class="field">
            <label>Rol</label>
            <select name="id_rol" class="ui fluid dropdown" required="required" disabled>
                <option value="">Seleccionar rol...</option>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}" {{ $rol->id == $permiso->id_rol ? 'selected="selected"': '' }}>{{ $rol->nombre_rol }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Permiso</label>
            <input type="text" name="nombre_rol" placeholder="Rol" required="required" autocomplete="off" value="{{ $permiso->nombre_permiso }}" disabled>
        </div>
        <a href="{{ URL::to('permisos') }}" class="ui button" type="submit">Volver</a>
    </form>
@endsection
