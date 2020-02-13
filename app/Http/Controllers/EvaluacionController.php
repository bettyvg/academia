<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluacionRequest;
use App\Models\Cat_escolaridad;
use App\Models\Registro;
use Illuminate\Http\Request;
use App\Models\evaluacion;
use App\Models\Cat_municipios;
use App\Models\Cat_ejecutivos;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;


class EvaluacionController extends BaseController
{


    public function evaluacionplatica()    {
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_ejecutivos = Cat_ejecutivos::select('id_ejecutivo','nombre_ejecutivo', 'apellido_paterno', 'apellido_materno')->orderBy('id_ejecutivo', 'ASC')->get();


        //dd($registro); //para realizar una consulta de

        $detalle_evaluacion = evaluacion::all();

        return View::make('evaluacionplaticainfo', array(
            'cat_municipios' => $cat_municipios,
            'detalle_evaluacion' => $detalle_evaluacion,
            'cat_ejecutivos' => $cat_ejecutivos
        ));

    }

    public function evaluacion(EvaluacionRequest $request)    {
        //dd(request()->all());
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
                $cat_ejecutivos = Cat_ejecutivos::select('id_ejecutivo','nombre_ejecutivo', 'apellido_paterno', 'apellido_materno')->orderBy('id_ejecutivo', 'ASC')->get();
                $detalle_evaluacion = evaluacion::all();



                evaluacion::create(request()->all());

                $alert = new \stdClass();
                $alert->message = 'La evaluación se envio correctamente';
                return View::make('evaluacionplaticainfo', array(
                    'alert' => $alert,
                    'detalle_evaluacion' => $detalle_evaluacion,
                    'cat_municipios' => $cat_municipios,
                    'cat_ejecutivos' => $cat_ejecutivos));

                //return back();

            }else{

            }

        }catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('evaluacionplaticainfo',
                array(
                    'alert' => $alert)
            );
        }
    }


   /* public function DetalleEvaluacion(){
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_ejecutivos = Cat_ejecutivos::select('id_ejecutivo','nombre_ejecutivo', 'apellido_paterno', 'apellido_materno')->orderBy('id_ejecutivo', 'ASC')->get();

        $detalle_evaluacion = evaluacion::get();

        return View::make('evaluacionplaticainfo', array(
            'detalle_evaluacion' => $detalle_evaluacion,
            'cat_municipios' => $cat_municipios,
            'cat_ejecutivos' => $cat_ejecutivos,

        ));
    }*/
}
