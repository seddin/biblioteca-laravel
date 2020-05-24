@extends('layouts.app')

@section('title', 'Datos del Alquiler')

@section('content')
    <form class="ui form" action="/alquileres/{{ $alquiler->id }}" method="POST">
        @method('patch')
        @csrf
        <div class="field">
            <label>Usuario</label>
            <select class="ui fluid dropdown" name="id_usuario" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar usuario...</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $alquiler->id_usuario ? 'selected="selected"': '' }}>{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Libro</label>
            <select class="ui fluid dropdown" name="id_libro" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar usuario...</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $libro->id == $alquiler->id_libro ? 'selected="selected"': '' }}>{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Fecha Prestamo</label>
            <input type="date" value="{{ $alquiler->fecha_prestamo }}" name="fecha_prestamo" placeholder="Fecha Prestamo" required="required">
        </div>
        <div class="field">
            <label>Fecha Devolucion</label>
            <input type="date" value="{{ $alquiler->fecha_devolucion }}" name="fecha_devolucion" placeholder="Fecha Devolucion" required="required">
        </div>
        <button class="ui button" type="submit">Actualizar</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
