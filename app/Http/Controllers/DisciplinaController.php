<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDisciplinaRequest;
use App\Http\Requests\UpdateDisciplinaRequest;
use App\Models\Disciplina;

class DisciplinaController extends Controller
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
     * @param  \App\Http\Requests\StoreDisciplinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisciplinaRequest $request)
    {
        try {

            /**
             * Instancia a model Disciplina e cria uma disciplina
             */
            
            Disciplina::create(
                [
                    'id_usuario' => $request->get('id_usuario'),
                    'numero' => $request->get('numero'),
                    'nome' => $request->get('nome'),
                    'turno' => $request->get('turno'),
                    'carga_horaria' => $request->get('carga_horaria')
                ]
            );
        } catch(Exception $e) {
            return response()->json('Erro!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisciplinaRequest  $request
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisciplinaRequest $request, Disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
