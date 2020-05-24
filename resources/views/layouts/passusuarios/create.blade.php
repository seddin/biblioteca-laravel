@extends('layouts.app')

@section('title', 'Añadir Pass Usuario')

@section('content')
    <form action="/passusuarios" method="POST" class="ui form">
        @csrf
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" required="required">
        </div>
        <div class="field">
            <label>Contraseña</label>
            <input type="text" name="password" placeholder="Contraseña" required="required" autocomplete="off">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
