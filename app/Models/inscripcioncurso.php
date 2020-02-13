<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inscripcioncurso extends Model
{
    public $table = 'inscripcion_curso';
    protected $primaryKey = 'id_inscripcion';

    protected $fillable = [
        'id_usuario',
        'id_cursosonline',
    ];
}

