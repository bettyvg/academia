<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;


class EvaluacionCapacitador extends Model
{
    protected $table = 'evaluacioncapacitador';
    protected $primaryKey = 'id_evaluacioncap';


    protected $fillable = ['fecha',
        'nombrepar',
        'id_capacitador',
        'id_tema',
        'cve_compuesta_ent_mun',
        'id_institucion',
        'puntualidad',
        'dominiotema',
        'exposicion',
        'ejemplos',
        'ejercicios',
        'empatiagrupo',
        'fluidez',
        'todostemas',
        'capresolver',
        'monitoreoeva1',
        'monitoreoeva2',
        'lugar',
        'equipo',
        'monitoreolog1',
        'monitoreolog2',
        'objetivoscurso',
        'contenidocurso',
        'contenidocuaderno',
        'monitoreocontenido1',
        'monitoreocontenido2',
        'registroorg',
        'atencionorg',
        'registrocursos',
        'monitoreoorg1',
        'monitoreoorg2',
        'comentariocurso',
        'temacurso',
        'updated_at',
        'created_at',
        ];

    public function nombre_cap()
    {
        return $this->hasOne('App\Models\Cat_capacitador', 'id_capacitador', 'id_capacitador');
    }

    public function nombre_municipio()
    {
        return $this->hasOne('App\Models\Cat_municipios', 'cve_compuesta_ent_mun', 'cve_compuesta_ent_mun');
    }

    public function nombre_institucion()
    {
        return $this->hasOne('App\Models\Cat_instituciones', 'id_institucion', 'id_institucion');
    }

    public function temas()
    {
        return $this->hasOne('App\Models\Cat_temas', 'id_tema', 'id_tema');
    }



    public function scopeSearch($query, $id_capacitador, $fecha1="",$fecha2="")
    {
        if($id_capacitador != 0)
        {
            return $query -> where('id_capacitador', '=', $id_capacitador);
            /*       ->orWhere('fecha','>=', "$fecha1")
                   ->orWhere('fecha','<=', "$fecha2");*/

        }
        else
        {
            $resultado = $query->where('id_capacitador', '=', $id_capacitador)
                ->Where(function($q) use($id_capacitador, $fecha1, $fecha2){
                    $q -> where('id_capacitador', '=', "$id_capacitador")
                        ->whereBetween




                        ('fecha','>=', "$fecha1")
                        ->orWhere('fecha','<=', "$fecha2");
                });
            return $resultado;
        }



       }
   /*
       protected function scopefecha1($query, $fecha1)
       {
           if($fecha1)
               return $query->where('fecha1','>=', "$fecha1");

       }
       protected function scopefecha2($query, $fecha2)
       {
           if($fecha2)
               return $query->where('fecha2','<=', "$fecha2");*/

      /* if($fecha1==0 and $fecha2 ==0)
       {
           $resultado = $query -> where('id_capacitador', '=', $id_capacitador)
           ->orWhere('fecha','>=', "$fecha1")
           ->orWhere('fecha','<=', "$fecha2");
       }
       else
        {
            $resultado=$query->where('id_capacitador', '=', $id_capacitador)
                ->Where(function($q) use($id_capacitador, $fecha1, $fecha2){
             $q -> where('id_capacitador', '=', "$id_capacitador")
                ->orWhere('fecha','>=', "$fecha1")
                ->orWhere('fecha','<=', "$fecha2");
                });
        }
        return $resultado;*/





}