@extends('layouts.app')

@section('title', 'Datos del Alquiler')

@section('content')
    <form class="ui form">
        <div class="field">
            <label>Usuario</label>
            <select class="ui fluid dropdown" disabled>
                <option value="">Seleccionar usuario...</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $alquiler->id_usuario ? 'selected="selected"': '' }}>{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Libro</label>
            <select class="ui fluid dropdown" disabled>
                <option value="">Seleccionar usuario...</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $libro->id == $alquiler->id_libro ? 'selected="selected"': '' }}>{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Fecha Prestamo</label>
            <input type="date" value="{{ $alquiler->fecha_prestamo }}" disabled>
        </div>
        <div class="field">
            <label>Fecha Devolucion</label>
            <input type="date" value="{{ $alquiler->fecha_devolucion }}" disabled>
        </div>
        <a href="{{ URL::to('alquileres') }}" class="ui button" type="submit">Volver</a>
    </form>
@endsection
