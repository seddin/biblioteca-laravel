<?php

namespace App\Http\Controllers;

use App\PassUsuario;
use Illuminate\Http\Request;

class PassUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = PassUsuario::all();
        return view('layouts.passusuarios.index', ["usuarios" => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.passusuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new PassUsuario();
        $usuario->nombre = $request->nombre;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect('passusuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PassUsuario  $passUsuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = PassUsuario::find($id);

        return view('layouts.passusuarios.show', ["usuario" => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PassUsuario  $passUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = PassUsuario::find($id);

        return view('layouts.passusuarios.edit', ["usuario" => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PassUsuario  $passUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = PassUsuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect('passusuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PassUsuario  $passUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = PassUsuario::find($id);
        $usuario->delete();
        return redirect('passusuarios');
    }
}
