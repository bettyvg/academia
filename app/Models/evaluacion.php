<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    protected $table = 'evaluacion';
    protected $primaryKey = 'id_evaluacion';

    protected $fillable = ['nombre','correo','id_ejecutivo','telefono','curp','cve_compuesta_ent_mun','puntualidad','conocimiento','capacidad','claridad','utilidad','modelo','razonasiste',
        'personajuridica','altahacienda','anosalta', 'montofinanciamiento','updated_at','created_at'];


    public function ejecutivos()
    {
        return $this->hasOne('App\Models\Cat_ejecutivos', 'id_ejecutivo', 'id_ejecutivo');
    }

    public function nombre_municipio()
    {
        return $this->hasOne('App\Models\Cat_municipios', 'cve_compuesta_ent_mun', 'cve_compuesta_ent_mun');
    }



}
