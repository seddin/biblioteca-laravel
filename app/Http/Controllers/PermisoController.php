<?php

namespace App\Http\Controllers;

use App\Permiso;
use App\Rol;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permiso::all();

        return view('layouts.permisos.index', ["permisos" => $permisos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        return view('layouts.permisos.create', ["roles" => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permiso = new Permiso();
        $permiso->id_rol = $request->id_rol;
        $permiso->nombre_permiso = $request->nombre_permiso;
        $permiso->save();

        return redirect("permisos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles = Rol::all();
        $permiso = Permiso::find($id);
        return view('layouts.permisos.show', ["roles" => $roles, "permiso" => $permiso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Rol::all();
        $permiso = Permiso::find($id);
        return view('layouts.permisos.edit', ["roles" => $roles, "permiso" => $permiso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permiso = Permiso::find($id);
        $permiso->id_rol = $request->id_rol;
        $permiso->nombre_permiso = $request->nombre_permiso;
        $permiso->save();

        return redirect("permisos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permiso::find($id)->delete();

        return redirect("permisos");
    }
}
