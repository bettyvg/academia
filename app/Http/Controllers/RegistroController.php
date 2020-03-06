<?php

namespace App\Http\Controllers;


use App\Http\Requests\PlaticaRequest;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Cat_entidades;
use App\Models\Cat_municipios;
use App\Models\Cat_escolaridad;
use App\Models\Cat_pais;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Database\QueryException;

use Illuminate\Routing\Controller as BaseController;




class RegistroController extends BaseController
{


    public function vinculacion()
    {

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_entidades = Cat_entidades::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $cat_pais = Cat_pais::all();
        $detalle_registrop = Registro::select('id_registro','nombre','apellido_paterno','apellido_materno','genero','cat_entidades.nom_ent','cat_municipios.nom_mun','fecha_nacimiento',
            'correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
            ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
            ->join('cat_entidades', 'cat_entidades.cve_ent', '=','registroplatica.cve_ent')
            ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
            ->orderBy('id_registro', 'DESC')->get();

        //dd($detalle_registrop);


        return View::make('registro_platica.registroplatica', array(
        'cat_municipios' => $cat_municipios,
        'cat_entidades' => $cat_entidades,
        'cat_escolaridad' => $cat_escolaridad,
        'detalle_registrop' => $detalle_registrop,
        'cat_pais' => $cat_pais
        ));
    }

    public function registro(){
        try {
            $title = 'Registro de platica informativa';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//dd(request()->all());
                Registro::create(request()->all());

                //$dd(request()->ALL);

                flash("El registro se guardo de manera exitosa!" )->success()->important();
                return Redirect::route('registroplatica');

            }else{

                $alert = new \stdClass();
                $alert->message = 'Ocurrió un error, por favor, contacte al administrador';
                $alert->type = 'danger';
                flash("Ocurrió un error, por favor, contacte al administrador" )->danger()->important();
                return Redirect::route('registroplatica');
            }


        }catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('registro_platica.registroplatica',
            array(
                'alert' => $alert)
            );
        }

    }

    public function edit($id){

        /*$detalle_registrop = Registro::select('id_registro','nombre','apellido_paterno','apellido_materno','genero','cat_entidades.nom_ent','cat_municipios.nom_mun','fecha_nacimiento',
            'correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
            ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
            ->join('cat_entidades', 'cat_entidades.cve_ent', '=','registroplatica.cve_ent')
            ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
            ->orderBy('created_at', 'DESC')->get();*/
        $detalle_registrop = Registro::find($id);

        //dd($detalle_registrop);
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_entidades = Cat_entidades::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $cat_pais = Cat_pais::all();


        //dd($detalle_registrop);

        return view('registro_platica.edit_registrop', compact('detalle_registrop','cat_municipios','cat_entidades','cat_pais','cat_escolaridad'));
    }

    public function update($id)
    {

        $detalle_registrop = Registro::find($id);
        //dd($detalle_registrop);
        $detalle_registrop->nombre =  Input::get('nombre_edit');
        $detalle_registrop->apellido_paterno = Input::get('apellido_paterno_edit');
        $detalle_registrop->apellido_materno = Input::get('apellido_materno_edit');
        $detalle_registrop->genero = Input::get('genero_edit');
        $detalle_registrop->id = Input::get('id');
        $detalle_registrop->cve_ent = Input::get('cve_ent');
        $detalle_registrop->cve_compuesta_ent_mun = Input::get('cve_compuesta_ent_mun');
        $detalle_registrop->fecha_nacimiento = Input::get('fecha_nacimiento_edit');
        $detalle_registrop->correo = Input::get('correo_edit');
        $detalle_registrop->telefono = Input::get('telefono_edit');
        $detalle_registrop->id_escolaridad = Input::get('id_escolaridad');
        $detalle_registrop->ocupacion = Input::get('ocupacion_edit');
//dd($detalle_registrop);
        $detalle_registrop->save();

        flash("El registro se actualizó de manera exitosa!" )->success()->important();
        return Redirect::route('registroplatica');
    }


}
