@extends('layouts.app')

@section('title', 'Añadir Libro')

@section('content')
    <form action="/libros" method="POST" class="ui form">
        @csrf
        <div class="field">
            <label>Autor</label>
            <select name="id_autor" class="ui fluid dropdown" required="required">
                <option value="">Seleccionar autor...</option>
                @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }} {{ $autor->apellidos  }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Titulo</label>
            <input type="text" name="titulo" placeholder="Titulo" required="required">
        </div>
        <div class="field">
            <label>Categoria</label>
            <input type="text" name="categoria" placeholder="Categoria" required="required">
        </div>
        <div class="field">
            <label>Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion" required="required">
        </div>
        <div class="field">
            <label>Precio</label>
            <input type="number" name="precio" placeholder="Precio" required="required">
        </div>
        <button class="ui button" type="submit">Añadir</button>
    </form>
    <script type="text/javascript">
        $('select.dropdown').dropdown();
    </script>
@endsection
