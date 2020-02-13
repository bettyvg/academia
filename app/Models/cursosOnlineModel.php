<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cursosOnlineModel extends Model
{
    protected $table = 'cursos_online';
    protected $primaryKey = 'id_cursosonline';

    protected $fillable = [
        'nombre_curso',
        'id_categoria',
        'id_capacitador',
        'descripcion',
        'id_admin',
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
