@extends('layouts.app')

@section('title', 'Datos del Libro')

@section('content')
    <form class="ui form">
        <div class="field">
            <label>Autor</label>
            <select name="id_autor" class="ui fluid dropdown" required="required" disabled>
                <option value="">Seleccionar autor...</option>
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $autor->id == $libro->id_autor ? 'selected="selected"': '' }}>
                        {{ $autor->nombre }} {{ $autor->apellidos  }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Titulo</label>
            <input type="text" placeholder="Titulo" required="required" value="{{ $libro->titulo }}" disabled>
        </div>
        <div class="field">
            <label>Categoria</label>
            <input type="text" placeholder="Categoria" required="required" value="{{ $libro->categoria }}" disabled>
        </div>
        <div class="field">
            <label>Descripcion</label>
            <input type="text" placeholder="Descripcion" required="required" value="{{ $libro->descripcion }}" disabled>
        </div>
        <div class="field">
            <label>Precio</label>
            <input type="number" placeholder="Precio" required="required" value="{{ $libro->precio }}" disabled>
        </div>
        <a href="{{ URL::to('libros') }}" class="ui button" type="submit">Volver</a>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
