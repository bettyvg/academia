<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registrowebModel extends Model
{
    public $table = 'registroweb';
    protected $primaryKey = 'id_beneficiario';

    protected $fillable = ['nombre','apellido_paterno','apellido_materno','rfc','genero','id','cve_ent','cve_compuesta_ent_mun','fecha_nacimiento','correo',
        'telefono','id_escolaridad','ocupacion','updated_at','created_at'];
}
