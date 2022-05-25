<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\FrequenciaController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DisciplinaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/diretor')->group(function() {
    Route::get('/listar', function() {
        return 1;
    });
    
    Route::post('/criar', [UsuarioController::class, 'store']);
    Route::delete('/excluir', function() {
        return 3;
    });
});


Route::prefix('/professor')->group(function() {
    Route::get('/listar', function() {
        return 1;
    });

    Route::post('/criar', function() {
        return 2;
    });

    Route::delete('/excluir', function() {
        return 3;
    });
});


Route::prefix('/disciplina')->group(function() {
    Route::get('/listar', [DisciplinaController::class, 'show']);
    Route::post('/criar', [DisciplinaController::class, 'store']);

    Route::delete('/excluir', function() {
        return 3;
    });
});


Route::prefix('/aluno')->group(function() {
    Route::get('/listar', function() {
        return 1;
    });

    Route::post('/criar', function() {
        return 2;
    });

    Route::delete('/excluir', function() {
        return 3;
    });
});