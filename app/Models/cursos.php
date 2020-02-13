<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Eloquent;

class cursos extends Eloquent
{
    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';

    protected $fillable = [
        'nom_curso',
        'id_tema',
        'id_institucion',
        'fecha_inicio',
        'hora_inicio',
        'fecha_fin',
        'hora_fin',
        'id_admn',
        'id_capacitador'
    ];

    public function capacitador()
    {
        return $this->hasOne('App\Models\EvaluacionCapacitador', 'id_capacitador', 'id_capacitador');
    }

    public function temas()
    {
        return $this->hasOne('App\Models\Cat_temas', 'id_tema', 'id_tema');
    }

    public function institucion()
    {
        return $this->hasOne('App\Models\Cat_instituciones', 'id_institucion', 'id_institucion');
    }

}
