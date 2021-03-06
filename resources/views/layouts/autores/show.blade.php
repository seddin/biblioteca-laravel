@extends('layouts.app')

@section('title', 'Datos del autor')

@section('content')
    <form class="ui form">
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" disabled value="{{ $autor->nombre }}">
        </div>
        <div class="field">
            <label>Apellidos</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required="required"  disabled value="{{ $autor->apellidos }}">
        </div>
        <div class="field">
            <label>Nacionalidad</label>
            <input type="text" name="nacionalidad" placeholder="Nacionalidad" required="required"  disabled value="{{ $autor->nacionalidad }}">
        </div>
        <div class="field">
            <label>Sexo</label>
            <select name="sexo" class="ui fluid dropdown" required="required" disabled>
                <option value="H" {{ $autor->sexo == "H" ? "selected='selected'": ""  }}>Hombre</option>
                <option value="M" {{ $autor->sexo == "M" ? "selected='selected'": ""  }}>Mujer</option>
            </select>
        </div>
        <div class="field">
            <label>Edad</label>
            <input type="number" name="edad" placeholder="Edad" required="required" disabled value="{{ $autor->edad }}">
        </div>
        <a href="{{ URL::to('autores') }}" class="ui button" type="submit">Volver</a>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
