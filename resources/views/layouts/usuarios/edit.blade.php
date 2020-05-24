@extends('layouts.app')

@section('title', 'Datos del libro')

@section('content')
    <form class="ui form" action="/usuarios/{{ $usuario->id }}" method="POST">
        @method('patch')
        @csrf
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" required="required" value="{{ $usuario->nombre }}">
        </div>
        <div class="field">
            <label>Contraseña</label>
            <input type="text" name="password" placeholder="Password" required="required" value="{{ $usuario->password }}">
        </div>
        <div class="field">
            <label>Telefono</label>
            <input type="text" name="telefono" placeholder="Telefono" required="required" value="{{ $usuario->telefono }}">
        </div>
        <div class="field">
            <label>Fecha Entrega</label>
            <input type="text" name="fecha_entrega" placeholder="Fecha Entrega" required="required" value="{{ $usuario->fecha_entrega }}">
        </div>
        <button class="ui button" type="submit">Actualizar</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
