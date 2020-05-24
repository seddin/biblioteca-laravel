@extends('layouts.app')

@section('title', 'Datos del usuario')

@section('content')
    <form class="ui form" action="/passusuarios/{{ $usuario->id }}" method="POST">
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
        <button class="ui button" type="submit">Actualizar</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
