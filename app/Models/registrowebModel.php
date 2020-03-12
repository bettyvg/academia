<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registrowebModel extends Model
{
    public $table = 'registroweb';
    protected $primaryKey = 'id_beneficiario';

    protected $fillable = ['nombre','apellido_paterno','apellido_materno','fecha_nacimiento','edad', 'genero','rfc', 'curp',
        'domicilio','cp','colonia','municipio','region_pf','correo','regimen_fiscal','alta_hacienda','razon_social','rfc_empresa',
        'domicilio_empresa','cp_rep_empresa','colonia_empresa','municipio_empresa','region_pm','act_empresarial','codigo_clase','descripcion_clase',
        'codigo_sedeco', 'descripcion_sedeco','tamaño_empresa','telefono','qr','updated_at',
        'created_at'];
}
