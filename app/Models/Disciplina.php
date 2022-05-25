<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $table = 'Disciplina';

    protected $fillable = [
        'id_usuario',
        'numero',
        'nome',
        'turno',
        'carga_horaria'
    ];
}
