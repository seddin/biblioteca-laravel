<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view('layouts.autores.index', ["autores" => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = new Autor;
        $autor->nombre = $request->nombre;
        $autor->apellidos = $request->apellidos;
        $autor->nacionalidad = $request->nacionalidad;
        $autor->sexo = $request->sexo;
        $autor->edad = $request->edad;
        $autor->save();

        return redirect('autores');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $autor = Autor::find($id);

        return view('layouts.autores.show', ["autor" => $autor]);
    }

    public function edit($id)
    {
        $autor = Autor::find($id);

        return view('layouts.autores.edit', ["autor" => $autor]);
    }
    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        $autor->nombre = $request->nombre;
        $autor->apellidos = $request->apellidos;
        $autor->nacionalidad = $request->nacionalidad;
        $autor->sexo = $request->sexo;
        $autor->edad = $request->edad;
        $autor->save();

        return redirect('autores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();
        return redirect('autores');
    }
}
