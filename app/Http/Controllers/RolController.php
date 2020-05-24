<?php

namespace App\Http\Controllers;

use App\Rol;
use App\Usuario;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all();
        return view('layouts.rolesusuarios.index', ["roles" => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view('layouts.rolesusuarios.create', ['usuarios' => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->id_usuario = $request->id_usuario;
        $rol->nombre_rol = $request->nombre_rol;
        $rol->save();

        return redirect("rolesusuarios");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::find($id);
        $usuarios = Usuario::all();
        return view('layouts.rolesusuarios.show', ["rol" => $rol, 'usuarios' => $usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::find($id);
        $usuarios = Usuario::all();
        return view('layouts.rolesusuarios.edit', ["rol" => $rol, 'usuarios' => $usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rol = Rol::find($id);
        $rol->id_usuario = $request->id_usuario;
        $rol->nombre_rol = $request->nombre_rol;
        $rol->save();

        return redirect("rolesusuarios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::find($id)->delete();
        return redirect('rolesusuarios');
    }
}
