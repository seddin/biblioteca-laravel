@extends('layouts.app')

@section('title', 'Datos del Usuario')

@section('content')
    <form class="ui form">
        <div class="field">
            <label>Nombre</label>
            <input type="text" value="{{ $usuario->nombre }}" disabled>
        </div>
        <div class="field">
            <label>Contraseña</label>
            <input type="text" value="{{ $usuario->password }}" disabled>
        </div>
        <div class="field">
            <label>Telefono</label>
            <input type="text" value="{{ $usuario->telefono }}" disabled>
        </div>
        <div class="field">
            <label>Fecha Entrega</label>
            <input type="text" value="{{ $usuario->fecha_entrega }}" disabled>
        </div>
        <a href="{{ URL::to('usuarios') }}" class="ui button" type="submit">Volver</a>
    </form>
@endsection
