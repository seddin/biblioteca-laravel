@extends('layouts.app')

@section('title', 'Añadir Usuario')

@section('content')
    <form action="/usuarios" method="POST" class="ui form">
        @csrf
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" required="required">
        </div>
        <div class="field">
            <label>Contraseña</label>
            <input type="text" name="password" placeholder="Contraseña" required="required" autocomplete="off">
        </div>
        <div class="field">
            <label>Telefono</label>
            <input type="text" name="telefono" placeholder="Telefono" required="required">
        </div>
        <div class="field">
            <label>Fecha Entrega</label>
            <input type="date" name="fecha_entrega" placeholder="Fecha Entrega" required="required">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
