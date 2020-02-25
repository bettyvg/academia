<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registrowebModel extends Model
{
    public $table = 'registroweb';
    protected $primaryKey = 'id_beneficiario';

    protected $fillable = ['nombre','apellido_paterno','apellido_materno','fecha_nacimiento','edad', 'genero','rfc', 'curp',
        'domicilio','cp','colonia','municipio','correo','regimen_fiscal','rfc_empresa','razon_social',
        'domicilio_empresa','cp_rep_empresa','colonia_empresa','municipio_empresa','region','sector',
        'subsector', 'rama','subrama','actividad','actividad','region','tamaño_empresa','telefono','qr','updated_at',
        'created_at'];
}
