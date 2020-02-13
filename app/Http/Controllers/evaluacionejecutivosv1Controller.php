<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use\App\Models\evaluacionejecutivosv1;
use App\Models\Cat_municipios;
use App\Models\Cat_ejecutivos;
use App\Models\Registro;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class evaluacionejecutivosv1Controller extends Controller
{

    public function index()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_ejecutivos = Cat_ejecutivos::select('id_ejecutivo','nombre_ejecutivo', 'apellido_paterno', 'apellido_materno')->where('estatus', '=', 'activo')->orderBy('id_ejecutivo', 'ASC')->where('estatus', '=', 'activo')->get();
        $detalle_evaluacion = evaluacionejecutivosv1::orderBy('id_evaluacion','DESC')->get();
        $Registroplatica = Registro::select('id_registro','nombre','apellido_paterno','apellido_materno')->orderBy('nombre','ASC')->get();

        //dd($Registroplatica);
        return View::make('ejecutivos.evaluacionejecutivos', array(
            'cat_municipios' => $cat_municipios,
            'detalle_evaluacion' => $detalle_evaluacion,
            'Registroplatica'=> $Registroplatica,
            'cat_ejecutivos' => $cat_ejecutivos
        ));

    }


    public function create()
    {
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_ejecutivos = Cat_ejecutivos::select('id_ejecutivo','nombre_ejecutivo', 'apellido_paterno', 'apellido_materno')->where('estatus', '=', 'activo')->orderBy('id_ejecutivo', 'ASC')->get();
        $detalle_evaluacion = evaluacionejecutivosv1::orderBy('id_evaluacion','DESC')->get();
        $Registroplatica = Registro::select('id_registro','nombre','apellido_paterno','apellido_materno')->orderBy('nombre','ASC')->get();

        return View::make('ejecutivos.evaluacionejecutivos', array(
            'cat_municipios' => $cat_municipios,
            'detalle_evaluacion' => $detalle_evaluacion,
            'Registroplatica'=> $Registroplatica,
            'cat_ejecutivos' => $cat_ejecutivos
        ));
    }


    public function store(Request $request)
    {
        //
//dd($request);

        $evaluacion = new evaluacionejecutivosv1();
        //dd($evaluacion);
        $participante = Registro::select('id_registro','nombre','apellido_paterno','apellido_materno')->where('id_registro', Input::get('id_registro'))->first();
    //dd($participante);
        $evaluacion->fecha= Input::get('fecha');
        $evaluacion->id_registro= Input::get('id_registro');
        $evaluacion->nombre_participante = $participante->nombre.$participante->apellido_paterno.$participante->apellido_materno;
        $evaluacion->id_ejecutivo= Input::get('id_ejecutivo');
        $evaluacion->curp= Input::get('curp');
        $evaluacion->inicio_platica= Input::get('inicio_platica');
        $evaluacion->atencion_ejecutivo= Input::get('atencion_ejecutivo');
        $evaluacion->dominio_platica= Input::get('dominio_platica');
        $evaluacion->resolucion_dudas= Input::get('resolucion_dudas');
        $evaluacion->consideracion_info= Input::get('consideracion_info');
        $evaluacion->aclaracion_info= Input::get('aclaracion_info');
        $evaluacion->utilidad_info= Input::get('utilidad_info');
        $evaluacion->etapa_negocio= Input::get('etapa_negocio');
        $evaluacion->solicitudcredito_ant= Input::get('solicitudcredito_ant');
        $evaluacion->financiamiento_otorgado= Input::get('financiamiento_otorgado');
        $evaluacion->fuente_financiamiento= Input::get('fuente_financiamiento');
        $evaluacion->motivo_nofinanciamiento= Input::get('motivo_nofinanciamiento');
        $evaluacion->depues_info= Input::get('depues_info');
        $evaluacion->rango_financiamiento= Input::get('rango_financiamiento');
        $evaluacion->destino_financiamiento= Input::get('destino_financiamiento');
        $evaluacion->comentarios= Input::get('comentarios');
//dd($evaluacion);
        $evaluacion->save();

       // evaluacionejecutivosv1::create(request()->all());/*Metodo create*/

       flash("La evaluación se registro de manera existosa " )->success()->important();

        //return redirect('/evaluacionejecutivos');

        //return View::make('/evaluacionejecutivos', array('alert' => $alert));
        //return View::make('evaluacionejecutivos', array('alert'=>$alert));
        return redirect('/evaluacionejecutivos');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\evaluacionejecutivosv1  $evaluacionejecutivosv1
     * @return \Illuminate\Http\Response
     */
    public function show(evaluacionejecutivosv1 $evaluacionejecutivosv1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\evaluacionejecutivosv1  $evaluacionejecutivosv1
     * @return \Illuminate\Http\Response
     */
    public function edit(evaluacionejecutivosv1 $evaluacionejecutivosv1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evaluacionejecutivosv1  $evaluacionejecutivosv1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evaluacionejecutivosv1 $evaluacionejecutivosv1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evaluacionejecutivosv1  $evaluacionejecutivosv1
     * @return \Illuminate\Http\Response
     */
    public function destroy(evaluacionejecutivosv1 $evaluacionejecutivosv1)
    {
        //
    }
}
