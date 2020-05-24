@extends('layouts.app')

@section('title', 'Añadir Alquiler')

@section('content')
    <form action="/alquileres" method="POST" class="ui form">
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
            <label>Libro</label>
            <select name="id_libro" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar libro...</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Fecha Prestamo</label>
            <input type="date" name="fecha_prestamo" placeholder="Fecha Prestamo" required="required">
        </div>
        <div class="field">
            <label>Fecha Devolucion</label>
            <input type="date" name="fecha_devolucion" placeholder="Fecha Devolucion" required="required">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
