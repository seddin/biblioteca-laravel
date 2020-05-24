<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('layouts.libros.index', ["libros" => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Autor::all();
        return view('layouts.libros.create', ["autores" => $autores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro;
        $libro->id_autor = $request->id_autor;
        $libro->titulo = $request->titulo;
        $libro->categoria = $request->categoria;
        $libro->descripcion = $request->descripcion;
        $libro->precio = $request->precio;
        $libro->save();

        return redirect('libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::find($id);
        $autores = Autor::all();
        return view('layouts.libros.show', ["libro" => $libro, "autores" => $autores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $autores = Autor::all();
        return view('layouts.libros.edit', ["libro" => $libro, "autores" => $autores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->id_autor = $request->id_autor;
        $libro->titulo = $request->titulo;
        $libro->categoria = $request->categoria;
        $libro->descripcion = $request->descripcion;
        $libro->precio = $request->precio;
        $libro->save();

        return redirect('libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect('libros');
    }
}
