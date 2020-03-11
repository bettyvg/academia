<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoEvento extends Model
{
    protected $table = 'alumno_evento';
    protected $primaryKey = 'id_evento';

    protected $fillable = ['id_beneficiario',
                'id_evaluacion',
                'id_curso',
                'id_cursosonline',
                'id_registro',
                'update_at',
                'created_at',
    ];
}
