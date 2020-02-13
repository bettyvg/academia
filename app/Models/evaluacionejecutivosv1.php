<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evaluacionejecutivosv1 extends Model
{
    protected $table = 'evaluacionejecutivos';
    protected $primaryKey = 'id_evaluacion';

    protected $fillable = ['fecha','id_registro','nombre_participante','apellidoP_participante','apellidoM_participante','curp','id_ejecutivo','inicio_platica','atencion_ejecutivo','dominio_platica',
        'resolucion_dudas','consideracion_info','consideracion_info','aclaracion_info','utilidad_info','etapa_negocio','solicitudcredito_ant',
        'financiamiento_otorgado', 'fuente_financiamiento','motivo_nofinanciamiento','depues_info','rango_financiamiento',
        'destino_financiamiento','comentarios'];

    public function ejecutivos()
    {
        return $this->hasOne('App\Models\Cat_ejecutivos', 'id_ejecutivo', 'id_ejecutivo');
    }

    public function registroplatica()
    {
        return $this->hasOne('App\Models\Registro', 'id_registro', 'id_registro');
    }

    public function nombre_municipio()
    {
        return $this->hasOne('App\Models\Cat_municipios', 'cve_compuesta_ent_mun', 'cve_compuesta_ent_mun');
    }

}
