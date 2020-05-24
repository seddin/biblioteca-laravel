@extends('layouts.app')

@section('title', 'Datos del autor')

@section('content')
    <form class="ui form" action="/autores/{{ $autor->id }}" method="POST">
        @method('patch')
        @csrf
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" value="{{ $autor->nombre }}">
        </div>
        <div class="field">
            <label>Apellidos</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required="required" value="{{ $autor->apellidos }}">
        </div>
        <div class="field">
            <label>Nacionalidad</label>
            <input type="text" name="nacionalidad" placeholder="Nacionalidad" required="required" value="{{ $autor->nacionalidad }}">
        </div>
        <div class="field">
            <label>Sexo</label>
            <select name="sexo" class="ui fluid dropdown" required="required">
                <option value="H" {{ $autor->sexo == "H" ? "selected='selected'": ""  }}>Hombre</option>
                <option value="M" {{ $autor->sexo == "M" ? "selected='selected'": ""  }}>Mujer</option>
            </select>
        </div>
        <div class="field">
            <label>Edad</label>
            <input type="number" name="edad" placeholder="Edad" required="required" value="{{ $autor->edad }}">
        </div>
        <button class="ui button" type="submit">Actualizar</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
