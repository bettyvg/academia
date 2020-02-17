<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registrowebModel extends Model
{
    public $table = 'registroweb';
    protected $primaryKey = 'id_beneficiario';

    protected $fillable = ['nombre','apellido_paterno','apellido_materno','fecha_nacimiento','edad', 'genero','rfc',
        'domicilio','num_ext', 'num_int','cp','colonia','municipio','correo','regimen_fiscal','rfc_empresa','razon_social',
        'domicilio_empresa','num_int_empresa','num_ext_empresa','cp_rep_empresa','id_colonia','id_municipio','sector',
        'subsector', 'rama','subrama','actividad','actividad','region','tamaño_empresa','telefono','updated_at',
        'created_at'];
}
