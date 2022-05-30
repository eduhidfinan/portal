<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $table = 'Disciplina';

    protected $fillable = [
        'id_matricula',
        'presenca',
        'id_disciplina'
    ];
}
