<?php

namespace App\Http\Controllers;

use App\Alquiler;
use App\Autor;
use App\Libro;
use App\Usuario;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquileres = Alquiler::all();
        return view('layouts.alquileres.index', ["alquileres" => $alquileres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();

        return view('layouts.alquileres.create', ['usuarios' => $usuarios, 'libros' => $libros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alquiler = new Alquiler();
        $alquiler->id_usuario = $request->id_usuario;
        $alquiler->id_libro = $request->id_libro;
        $alquiler->fecha_prestamo = $request->fecha_prestamo;
        $alquiler->fecha_devolucion = $request->fecha_devolucion;
        $alquiler->save();

        return redirect('alquileres');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alquiler = Alquiler::find($id);
        $usuarios = Usuario::all();
        $libros = Libro::all();

        return view("layouts.alquileres.show", [
            'alquiler' => $alquiler,
            'usuarios' => $usuarios,
            'libros' => $libros
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alquiler = Alquiler::find($id);
        $usuarios = Usuario::all();
        $libros = Libro::all();

        return view("layouts.alquileres.edit", [
            'alquiler' => $alquiler,
            'usuarios' => $usuarios,
            'libros' => $libros
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alquiler = Alquiler::find($id);
        $alquiler->id_usuario = $request->id_usuario;
        $alquiler->id_libro = $request->id_libro;
        $alquiler->fecha_prestamo = $request->fecha_prestamo;
        $alquiler->fecha_devolucion = $request->fecha_devolucion;
        $alquiler->save();

        return redirect('alquileres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alquiler = Alquiler::find($id);
        $alquiler->delete();

        return redirect("alquileres");
    }
}
