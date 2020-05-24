@extends('layouts.app')

@section('title', 'Añadir autor')

@section('content')
    <form action="/autores" method="POST" class="ui form">
        @csrf
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" required="required">
        </div>
        <div class="field">
            <label>Apellidos</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required="required">
        </div>
        <div class="field">
            <label>Nacionalidad</label>
            <input type="text" name="nacionalidad" placeholder="Nacionalidad" required="required">
        </div>
        <div class="field">
            <label>Sexo</label>
            <select name="sexo" class="ui fluid dropdown" required="required">
                <option value="H">Hombre</option>
                <option value="M">Mujer</option>
            </select>
        </div>
        <div class="field">
            <label>Edad</label>
            <input type="number" name="edad" placeholder="Edad" required="required">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
