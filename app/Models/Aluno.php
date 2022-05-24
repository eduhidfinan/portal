<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory, SoftDelete;

    protected $table = 'Aluno';

    protected $fillable = [
        'nome',
        'genero',
        'cpf',
        'nome_mae',
        'nome_pai',
        'matricula'
    ];
}