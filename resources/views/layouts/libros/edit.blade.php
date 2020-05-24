@extends('layouts.app')

@section('title', 'Datos del libro')

@section('content')
    <form class="ui form" action="/libros/{{ $libro->id }}" method="POST">
        @method('patch')
        @csrf
        <div class="field">
            <label>Autor</label>
            <select name="id_autor" class="ui fluid dropdown" required="required">
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
            <input type="text" name="titulo" placeholder="Titulo" required="required" value="{{ $libro->titulo }}">
        </div>
        <div class="field">
            <label>Categoria</label>
            <input type="text" name="categoria" placeholder="Categoria" required="required" value="{{ $libro->categoria }}">
        </div>
        <div class="field">
            <label>Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion" required="required" value="{{ $libro->descripcion }}">
        </div>
        <div class="field">
            <label>Precio</label>
            <input type="number" name="precio" placeholder="Precio" required="required" value="{{ $libro->precio }}">
        </div>
        <button class="ui button" type="submit">Actualizar</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
