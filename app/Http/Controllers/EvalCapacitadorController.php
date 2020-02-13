<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluacionCapaRequest;
use Illuminate\Http\Request;
use App\Models\Cat_municipios;
use App\Models\EvaluacionCapacitador;
use App\Models\Cat_capacitador;
use App\Models\Cat_instituciones;
use App\Models\Cat_temas;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use App\Models\Cat_entidades;
use App\Models\Cat_ejecutivos;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Collection;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use App\EvaluacionCap;
use Illuminate\Routing\Controller as Controller;

class EvalCapacitadorController extends Controller
{

    //
    public function inicioevaluacion()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_capacitador = Cat_capacitador::select('id_capacitador','nom_cap', 'apellido_paterno', 'apellido_materno')->orderBy('nom_cap', 'ASC')->where('estatus', '=','activo')->get();
        $cat_instituciones = Cat_instituciones::all();
        $busqueda = EvaluacionCapacitador::orderBy('created_at', 'desc')->get();
        $usuario_session = Session::get('usuario');
        $evaluacioncapacitador = EvaluacionCapacitador::all();
        $cat_temas = Cat_temas::all()->where('estatus', '=','activo');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('EvaluacionCapacitadores', array('cat_municipios'=>$cat_municipios, 'cat_capacitador'=>$cat_capacitador, 'cat_instituciones'=>$cat_instituciones, 'cat_temas'=>$cat_temas, 'busqueda'=>$busqueda));
    }


    public function EvaluacionCapacitadores()
    {
        $busqueda = EvaluacionCapacitador::OrderBy('id_capacitador', 'DESC');
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_capacitador = Cat_capacitador::select('id_capacitador', 'nom_cap', 'apellido_paterno', 'apellido_materno')->orderBy('nom_cap', 'ASC')->where('estatus', '=','activo')->get();
        $cat_instituciones = Cat_instituciones::all();
        $cat_temas = Cat_temas::all()->where('estatus', '=','activo');
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                EvaluacionCapacitador::create(request()->all());

                /*return View::make('EvaluacionCapacitadores', array(
                    'alert' => $alert, 'cat_municipios' => $cat_municipios, 'cat_capacitador' => $cat_capacitador, 'cat_instituciones' => $cat_instituciones, 'busqueda'=>$busqueda, 'cat_temas'=>$cat_temas));*/

                flash("La evaluación se registro correctamente!")->success()->important();
                return Redirect::route('EvaluacionCapacitadores');

                //return back();
            } else {

            }
        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('EvaluacionCapacitadores',
                array(
                    'alert' => $alert, 'cat_municipios' => $cat_municipios, 'cat_capacitador' => $cat_capacitador,'busqueda'=>$busqueda, 'cat_temas'=>$cat_temas)
            );
        }
    }


}
