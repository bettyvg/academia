<?php

namespace App\Http\Controllers;

use App\Models\Cat_codigospostales;
use Illuminate\Http\Request;
use App\Models\registrowebModel;
use App\Models\Registro;
use App\Models\cat_scian;
use App\Models\Cat_entidades;
use App\Models\Cat_regiones;
use App\Models\Cat_municipios;
use App\Models\Cat_escolaridad;
use App\Models\Cat_pais;
use App\Mail\MensajeEnviado;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class registro_adminController extends Controller
{
    public function index()
    {
        $usuario_session = Session::get('usuario');
        if(!$usuario_session){
            return Redirect::route('login');
        }
        $cat_entidades = Cat_entidades::all();
        //$cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_municipios = Cat_codigospostales::select('d_estado','c_estado','D_mnpio')->where('c_estado', '14')->groupBy('d_estado','c_estado','D_mnpio')->get();
        $cat_codigospostales = Cat_codigospostales::select('d_estado')->groupBy('d_estado')->get();
        $cat_codigospostales2 = Cat_codigospostales::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $cat_pais = Cat_pais::all();
        $cat_scian = cat_scian::all();
        $cat_regiones = Cat_regiones::select('region')->groupBy('region')->get();
        $sectores = cat_scian::select('codigo_sector', 'descripcion_sector')->distinct()->get();
        $subsectores = cat_scian::select('codigo_subsector', 'descripcion_subsector')->distinct()->get();
        $ramas = cat_scian::select('codigo_rama', 'descripcion_rama')->distinct()->get();
        $subramas = cat_scian::select('codigo_subrama', 'descripcion_subrama')->distinct()->get();
        $clase_actividad = cat_scian::select('codigo_clase', 'descripcion_clase')->distinct()->get();
        $registroweb = registrowebModel::all();
        $detalle_registrop = Registro::select('nombre','apellido_paterno','apellido_materno','genero','cat_municipios.nom_mun','fecha_nacimiento',
            'correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
            ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
            ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
            ->orderBy('created_at', 'DESC')->get();

        //dd($detalle_registrop);


        return View::make('usuarios.registro_admin', array(
            'cat_entidades' => $cat_entidades,
            'sectores' => $sectores,
            'subsectores' => $subsectores,
            'ramas' => $ramas,
            'subramas' => $subramas,
            'clase_actividad' => $clase_actividad,
            'cat_municipios' => $cat_municipios,
            'cat_codigospostales' => $cat_codigospostales,
            'cat_codigospostales2' => $cat_codigospostales2,
            'cat_escolaridad' => $cat_escolaridad,
            'detalle_registrop' => $detalle_registrop,
            'cat_regiones' => $cat_regiones,
            'cat_pais' => $cat_pais,
            'cat_scian' => $cat_scian,
            'registroweb' => $registroweb
        ));
    }

    public function get_municipio($estado){
        //dd($estado);
        $datos = Cat_codigospostales::select('c_estado', 'D_mnpio','c_mnpio')->where('c_estado', $estado)->groupby('D_mnpio','c_estado','c_mnpio')->get();
        //dd($datos);
        return response()->json($datos, '200');
    }

    public function get_colonia($colonia){
        //dd($estado);
        $datos = Cat_codigospostales::select('d_asenta', 'id_codigocp', 'c_mnpio','d_tipo_asenta')->where('c_mnpio', $colonia)->groupby('d_asenta', 'id_codigocp', 'c_mnpio','d_tipo_asenta')->get();
        //dd($datos);
        return response()->json($datos, '200');
    }

    public function get_cp($cp){
        //dd($cp);
        $datos = Cat_codigospostales::select('d_codigo', 'd_asenta','id_codigocp','D_mnpio','c_mnpio')->where('d_codigo', $cp)->groupby('D_mnpio','c_mnpio', 'd_codigo', 'd_asenta','id_codigocp')->get();

        //dd($datos);
        return response()->json($datos, '200');
    }


    public function get_region($region){
        //dd($cp);
        //dd($region);
        $cat_regiones = Cat_regiones::select('cat_codigos_postales.d_estado', 'cat_codigos_postales.c_estado' , 'cat_regiones.municipio', 'cat_regiones.region')
            ->join('cat_codigos_postales', 'cat_regiones.municipio', '=' ,'cat_codigos_postales.D_mnpio')
            ->where('cat_regiones.municipio', $region)->first();

        return response()->json($cat_regiones, '200');
    }


    public function create()
    {
        $reg =  registrowebModel::create(request()->all());//agregado el 25/02/2020 por Carlos Villalobos
        $name = date("YmdHis") . uniqid("", true) . '.png';
        QrCode::format('png')->size(399)->generate($reg->id_beneficiario,public_path('img/documentos/'.$name));
        $reg->qr=$name;
        //dd($reg);
        $reg->save();

        $alert = new \stdClass();
        $alert->message = 'Los datos se guardaron correctamente';
        $alert->type = 'success';
        $alert->qr=$name;

        $cat_entidades = Cat_entidades::all();
        //$cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_municipios = Cat_codigospostales::select('d_estado','c_estado','D_mnpio')->where('c_estado', '14')->groupBy('d_estado','c_estado','D_mnpio')->get();
        $cat_codigospostales = Cat_codigospostales::select('d_estado')->groupBy('d_estado')->get();
        $cat_codigospostales2 = Cat_codigospostales::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $cat_pais = Cat_pais::all();
        $cat_regiones = Cat_regiones::select('region')->groupBy('region')->first();
        $sectores = cat_scian::select('codigo_sector', 'descripcion_sector')->distinct()->get();
        $subsectores = cat_scian::select('codigo_subsector', 'descripcion_subsector')->distinct()->get();
        $ramas = cat_scian::select('codigo_rama', 'descripcion_rama')->distinct()->get();
        $subramas = cat_scian::select('codigo_subrama', 'descripcion_subrama')->distinct()->get();
        $clase_actividad = cat_scian::select('codigo_clase', 'descripcion_clase')->distinct()->get();
        $detalle_registrop = Registro::select('nombre','apellido_paterno','apellido_materno','genero','cat_municipios.nom_mun','fecha_nacimiento',
            'correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
            ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
            ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
            ->orderBy('created_at', 'DESC')->get();
        $registroweb = registrowebModel::all();

        //Mail::to($reg->correo)->send(new MensajeEnviado());

        //flash("Tu información se envío exitosamente!")->success()->important();

        return View::make('usuarios.registro_admin', array(
            'alert' => $alert,
            'cat_entidades' => $cat_entidades,
            'sectores' => $sectores,
            'subsectores' => $subsectores,
            'ramas' => $ramas,
            'subramas' => $subramas,
            'clase_actividad' => $clase_actividad,
            'cat_municipios' => $cat_municipios,
            'cat_codigospostales' => $cat_codigospostales,
            'cat_codigospostales2' => $cat_codigospostales2,
            'cat_escolaridad' => $cat_escolaridad,
            'detalle_registrop' => $detalle_registrop,
            'cat_regiones' => $cat_regiones,
            'cat_pais' => $cat_pais,
            'registroweb' => $registroweb
        ));



        //registrowebModel::create(request()->all());/*Metodo create*/



        //return 'Mensaje Enviado';

        ///return redirect('registrowebModel');
    }

    public function pruebacorreo(){
        Mail::to('beatriz.vargas@jalisco.gob.mx')->send(new MensajeEnviado());
    }

    public function edit($id){

        $detalle_registrop = registrowebModel::find($id);

        //dd($detalle_registrop);
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_entidades = Cat_entidades::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $cat_pais = Cat_pais::all();


        //dd($detalle_registrop);

        return view('usuarios.edit_registro_admin', compact('detalle_registrop','cat_municipios','cat_entidades','cat_pais','cat_escolaridad'));
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
        return Redirect::route('registro_admin');
    }

}
