@extends('layouts.app')

@section('title', 'Datos del Rol')

@section('content')
    <form class="ui form">
        <div class="field">
            <label>Usuario</label>
            <select name="id_usuario" class="ui fluid dropdown" required="required" disabled>
                <option value="">Seleccionar usuario...</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $rol->id_usuario ? 'selected="selected"': '' }}>{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Rol</label>
            <input type="text" name="nombre_rol" placeholder="Rol" required="required" autocomplete="off" value="{{$rol->nombre_rol}}" disabled>
        </div>
        <a href="{{ URL::to('rolesusuarios') }}" class="ui button" type="submit">Volver</a>
    </form>
@endsection
