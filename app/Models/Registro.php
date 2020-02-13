<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Registro extends Model
{
    public $table = 'registroplatica';
    protected $primaryKey = 'id_registro';

    protected $fillable = ['nombre','apellido_paterno','apellido_materno','genero','id','cve_ent','cve_compuesta_ent_mun','fecha_nacimiento','correo',
        'telefono','id_escolaridad','ocupacion','updated_at','created_at'];
}
