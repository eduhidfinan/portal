<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipo_UsuarioRequest;
use App\Http\Requests\UpdateTipo_UsuarioRequest;
use App\Models\Tipo_Usuario;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipo_UsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipo_UsuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Usuario  $tipo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Usuario $tipo_Usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Usuario  $tipo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Usuario $tipo_Usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipo_UsuarioRequest  $request
     * @param  \App\Models\Tipo_Usuario  $tipo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipo_UsuarioRequest $request, Tipo_Usuario $tipo_Usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Usuario  $tipo_Usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Usuario $tipo_Usuario)
    {
        //
    }
}
